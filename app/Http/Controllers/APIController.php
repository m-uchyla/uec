<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {

    private $client_id= 'e61fd46a3437441ae2ed72085mqhuwuo8gsggggskgk4og8owcckkckgcskws4kkk0000ocws8';
    private $client_secret= '1l80dg7iyxs0s8ggocwg80s4k8gwcscc0k4gog04w4gs4gw40o';
    private $toornament_link= 'https://api.toornament.com/organizer/v2/tournaments/';
    private $tournament_id= '3784327726246748160';
    private $x_api_key= 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U';

    private $first_group_id= [
        '3920455651516268658',
        '3920455651482714145',
        '3920455651516268631',
        '3920455651516268604'
    ];

    private $second_group_id= [
        '3920456038305112081',
        '3920456038338666540'
    ];

    private $finals_id=
        '3920456542151671808'
    ;


    private function getToken($scope){
        return (Http::asForm()->post('https://api.toornament.com/oauth/v2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => $this->client_id,
            'client_secret' =>$this->client_secret,
            'scope' => 'organizer:'.$scope,
            ])->json())['access_token'];
    }

    public function getList(){

        $registrations = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('participant'),
            'Range' => 'participants=0-49'
        ])->get($this->toornament_link.$this->tournament_id.'/participants');

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        
        return view('teams',['list'=> json_decode($registrations), 'featured' => $featured]);
    }

    public function getBracket(){

        $first = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('result'),
            'Range' => 'items=0-49'
        ])->get($this->toornament_link.$this->tournament_id.'/stages/3920455650677407744/ranking-items');
        $first= json_decode($first);
        $groups=[];
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        foreach ($first as $f){
            switch ($f->group_id) {
                case $this->first_group_id[0]:
                    $groups['A'][$a] = $f;
                    $a++;
                    break;
                case $this->first_group_id[1]:
                    $groups['B'][$b] = $f;
                    $b++;
                    break;
                case $this->first_group_id[2]:
                    $groups['C'][$c] = $f;
                    $c++;
                    break;
                case $this->first_group_id[3]:
                    $groups['D'][$d] = $f;
                    $d++;
                    break;
                    
            }
        }

        usort($groups['A'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });
        usort($groups['B'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });
        usort($groups['C'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });
        usort($groups['D'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });


        $second = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('result'),
            'Range' => 'items=0-49'
        ])->get($this->toornament_link.$this->tournament_id.'/stages/3920456037466251264/ranking-items');
        $second= json_decode($second);
        $aditional=[];
        $e = 0;
        $f = 0;
        foreach ($second as $s){
            switch ($s->group_id) {
                case $this->second_group_id[0]:
                    $aditional['E'][$e] = $s;
                    $e++;
                    break;
                case $this->second_group_id[1]:
                    $aditional['F'][$f] = $s;
                    $f++;
                    break;
            }
        }

        usort($aditional['E'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });
        usort($aditional['F'], function($a, $b)
        {
            return strcmp($a->rank, $b->rank);
        });

        $finals = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('result'),
            'Range' => 'matches=0-99'
        ])->get($this->toornament_link.$this->tournament_id.'/matches', [
            'stage_ids' => $this->finals_id,
            'sort' => 'structure'
        ]);
        $finals= json_decode($finals);

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        return view('bracket',['groups'=> $groups, 'featured' => $featured, 'aditional' => $aditional, 'finals' => $finals]);
    }

    public function signIn(Request $request){

        try{
        $teamID = $request->input('teamID');
        $name = $request->input('teamName');
        $logo = $request->input('logo');
        $email = $request->input('email');
        $fanpage = $request->input('facebook');
        $ownerID = $request->input('ownerID');

        $counter = 0;

        for ($i = 0; $i<(DB::table('teams-users')->where('teamID', $teamID)->count()); $i++){
            $data = $request->input('player'.$i);
            if($data){
                $player = DB::table('users')->where('id', $data)->first();
            
                $lineup[$counter] = [
                    "name" => $player->nick,
                    "email" => $player->email,
                    "custom_user_identifier" => $player->id,
                    "custom_fields" => 
                    [
                        'imie' => $player->name,
                        'nazwisko' => $player->lastName,
                        'zdjecie' => $player->photo,
                        'steam_id_64' => $player->steamID,
                        'data_urodzenia' => $player->dateOfBirth
                    ]
                ];

                $counter++;
            }
        }

        $response = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('registration'),
        ])->post($this->toornament_link.$this->tournament_id.'/registrations', [
                "name" => $name,
                "email" => $email,
                "custom_user_identifier" => $teamID,
                "custom_fields"=> 
                [
                    'logo' => $logo,
                    "fanpage" => $fanpage,
                ],
                "type" => "team",
                "lineup" => $lineup
            ]);

            DB::table('teams')->where('teamID', $teamID)->update(['signedIn' => 1]);
        
            return redirect()->route('dashboard');
        }catch(Throwable $e){
            report($e);

            return redirect()->route('dashboard'); 
        }
    }

    public function getSchedule (){

        date_default_timezone_set('Europe/Warsaw');
        $now = date("Y-m-d H:i:s",strtotime("now"));

        $matches = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('result'),
            'Range' => 'matches=0-99'
        ])->get($this->toornament_link.$this->tournament_id.'/matches',[
            'is_scheduled' => 1
        ]);
        $matches= json_decode($matches);

        return $matches;

        // $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        // return view('schedule',['featured' => $featured]);
    }

    
}
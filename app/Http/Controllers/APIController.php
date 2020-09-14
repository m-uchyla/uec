<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {

    private $client_id= '70257817dfff160b4ee5df711uuq67pfb6v4skg4sw08c4k8co80wg4skowok8cws004kg8c8o';
    private $client_secret= '38wdsxt25oqoscogwgsg04gskso80800sc8o4480wwkg8448cc';
    private $toornament_link= 'https://api.toornament.com/organizer/v2/tournaments/';
    // private $tournament_id= '3784327726246748160';
    private $tournament_id= '3759322905472999424';
    private $x_api_key= 'B7BAhJ4kDUI4l7d12rwMEdLfFDelET_NNbLw_wm4pT4';

    private $first_group_id= [
        '3921463444860035105',
        '3921463444893589564',
        '3921463444893589591',
        '3921463444893589618'
    ];

    private $second_group_id= [
        '3921470623060557841',
        '3921470623094112300'
    ];

    private $finals_id=
        '3921472689046593536'
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
        ])->get($this->toornament_link.$this->tournament_id.'/stages/3921463444088283136/ranking-items');
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
        ])->get($this->toornament_link.$this->tournament_id.'/stages/3921470622221697024/ranking-items');
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
        $now = date("Y-m-d\TH:i:sP",strtotime("now"));

        $matches = Http::withHeaders([
            'X-Api-Key' => $this->x_api_key,
            'Authorization' => $this->getToken('result'),
            'Range' => 'matches=0-99'
        ])->get($this->toornament_link.$this->tournament_id.'/matches',[
            'is_scheduled' => 1,
            'scheduled_after' => $now,
            'sort' => 'schedule'
        ]);
        $matches= json_decode($matches);

        $iter = 0;
        foreach ($matches as $m){
            if($iter == 8){
                $m->round=1;
                $iter = 0;
            } else{
                $m->round=0;
                $iter++;
            }            
        }

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        return view('schedule',['featured' => $featured, 'matches' => $matches]);
    }

}
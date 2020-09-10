<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {


    private function getToken(){
        return (Http::asForm()->post('https://api.toornament.com/oauth/v2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => 'e61fd46a3437441ae2ed72085mqhuwuo8gsggggskgk4og8owcckkckgcskws4kkk0000ocws8',
            'client_secret' =>'1l80dg7iyxs0s8ggocwg80s4k8gwcscc0k4gog04w4gs4gw40o',
            'scope' => 'organizer:registration',
            ])->json())['access_token'];
    }

    public function getList(){

        $registrations = Http::withHeaders([
            'X-Api-Key' => 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U',
            'Authorization' => getToken(),
            'Range' => 'registrations=0-16'
        ])->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations');
        
        return $response;
    }

    public function signIn(Request $request){

        // try{
        $teamID = $request->input('teamID');
        $name = $request->input('teamName');
        $logo = $request->input('logo');
        $email = $request->input('email');
        $fanpage = $request->input('facebook');
        $ownerID = $request->input('ownerID');

        for ($i = 0; i<(DB::table('teams-users')->where('teamID', $teamID)->count()); $i++){
            $data = $request->input('player'.$i);
            if($data){
                $player = DB::table('users')->where('id', $data)->first();
            
                $lineup[$i] = [
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
            }
        }

        $response = Http::withHeaders([
            'X-Api-Key' => 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U',
            'Authorization' => getToken()
        ])->post('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations', [
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
        
            return $response;
        // }catch(Throwable $e){
        //     report($e);

        //     return redirect()->route('dashboard'); 
        // }
    }

    public function registration (Request $request){

        return null;
    }

    
}
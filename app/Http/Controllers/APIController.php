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

        $teamID = $request->input('teamID');
        $name = $request->input('teamName');
        $logo = $request->input('logo');
        $email = $request->input('email');
        $fanpage = $request->input('facebook');
        $ownerID = $request->input('ownerID');

        for ($i = 0; i<8; $i++){
            $number = 'player'.$i;
            $players[$i] = $request->input($number);
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
                "lineup" => [
                    [
                        "name" => "A team player name",
                        "email" => "player_1@team.com",
                        "custom_user_identifier" => "acme:account:1",
                        "custom_fields" => 
                        [
                            'imie' => 'name',
                            'nazwisko' => 'lastName',
                            'zdjecie' => 'zdjecie',
                            'steam_id_64' => 'steam_id_64',
                            'data_urodzenia' => '01.01.2001'
                        ]
                    ],
                    [
                        "name" => "A team player name",
                        "email" => "player_2@team.com",
                        "custom_user_identifier" => "acme:account:2",
                        "custom_fields" => 
                        [
                            'imie' => 'name',
                            'nazwisko' => 'lastName',
                            'zdjecie' => 'zdjecie',
                            'steam_id_64' => 'steam_id_64',
                            'data_urodzenia' => '01.01.2001'
                        ]
                    ],
                    [
                        "name" => "A team player name",
                        "email" => "player_3@team.com",
                        "custom_user_identifier" => "acme:account:3",
                        "custom_fields" => 
                        [
                            'imie' => 'name',
                            'nazwisko' => 'lastName',
                            'zdjecie' => 'zdjecie',
                            'steam_id_64' => 'steam_id_64',
                            'data_urodzenia' => '01.01.2001'
                        ]
                    ],
                    [
                        "name" => "A team player name",
                        "email" => "player_4@team.com",
                        "custom_user_identifier" => "acme:account:4",
                        "custom_fields" => 
                        [
                            'imie' => 'name',
                            'nazwisko' => 'lastName',
                            'zdjecie' => 'zdjecie',
                            'steam_id_64' => 'steam_id_64',
                            'data_urodzenia' => '01.01.2001'
                        ]
                    ],
                    [
                        "name" => "A team player name",
                        "email" => "player_5@team.com",
                        "custom_user_identifier" => "acme:account:5",
                        "custom_fields" => 
                        [
                            'imie' => 'name',
                            'nazwisko' => 'lastName',
                            'zdjecie' => 'zdjecie',
                            'steam_id_64' => 'steam_id_64',
                            'data_urodzenia' => '01.01.2001'
                        ]
                    ]
                ]
            ]);
        
            return $response;
    }

    public function registration (Request $request){

        return null;
    }

    
}
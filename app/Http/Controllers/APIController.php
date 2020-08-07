<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {

    

    public function getList(){

        $token = Http::asForm()->post('https://api.toornament.com/oauth/v2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => 'e61fd46a3437441ae2ed72085mqhuwuo8gsggggskgk4og8owcckkckgcskws4kkk0000ocws8',
            'client_secret' =>'1l80dg7iyxs0s8ggocwg80s4k8gwcscc0k4gog04w4gs4gw40o',
            'scope' => 'organizer:registration',
            ])->json();

        $response = Http::withHeaders([
            'X-Api-Key' => 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U',
            'Authorization' => $token['access_token'],
            'Range' => 'registrations=0-49'
        ])->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations');
        return $response;
    }

    
}
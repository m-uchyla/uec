<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {

    

    public function getList(){
        $response = Http::withHeaders([
            'X-Api-Key' => 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U',
            'Authorization' => Http::withBody(
                'grant_type=client_credentials&client_id=s6BhdRkqt3&client_secret=7Fjfp0ZBr1KtDRbnfVdmIw'
            )->post('https://api.toornament.com/oauth/v2/token'),
            'Range' => '0-49'
        ])->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations');
        return $response;
    }

    
}
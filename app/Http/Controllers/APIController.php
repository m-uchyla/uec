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
            'Authorization' => '
            https://account.toornament.com/oauth2/authorize?
            response_type=code&
            client_id={QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U}&
            redirect_uri={https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations}&
            scope={organizer:registration}&
            state={csrf_token()}',
            'Range' => '0-49'
        ])->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations', [
            'name' => 'Taylor',
        ]);
        return $response;
    }

    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class APIController extends Controller {

    

    public function getList(){
        $response = Http::get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations');
    }

    
}
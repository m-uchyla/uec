<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class APIController extends Controller {

    

    public function getList(){

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        $Client = new Client();
        $body = $client->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations')->getBody();
        $obj = json_decode($body);
        return response(['obj' => $obj, 'featured' => $featured])
            ->header('X-Api-Key','QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U')
            ->header('Authorization','organizer:registration')
            ->header('Range','0-49');
    }

    
}
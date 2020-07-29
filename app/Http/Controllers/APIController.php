<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    

    public function getList(){

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        $Client = new Client();
        $body = $client->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations')->getBody();
        $obj = json_decode($body);
        return view('list', ['obj' => $obj, 'featured' => $featured]);
    }

    
}
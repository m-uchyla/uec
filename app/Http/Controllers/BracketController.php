<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BracketController extends Controller {

    

    public function getView(){

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();

        return view('bracket', ['featured' => $featured]);
    }

    public function getTeams(){

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();

        return view('teams', ['featured' => $featured]);
    }

    
}
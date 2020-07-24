<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    

    public function get(){

        date_default_timezone_set('Europe/Warsaw');

        $views = DB::table('articles')->sum('views');
        $now = date("Y-m-d H:i:s",strtotime("now"));
        $then = date("Y-m-d H:i:s",strtotime("-7 days"));
        $month = date("Y-m-d H:i:s",strtotime("-1 month"));
        $lastViews = DB::table('articles')->whereBetween('created_at',[$then,$now])->sum('views');

        for ($i = 0;$i<14;$i++){
            $count[$i] = DB::table('users')->whereDay('created_at',(date("d",strtotime("-".$i." days"))))->whereMonth('created_at',(date("m",strtotime("-".$i." days"))))->count();
        }

        $users=array(
            "count" => DB::table('users')->count(),
            "lastWeek" => DB::table('users')->whereBetween('created_at',[$then,$now])->count(),
            "lastMonth" => DB::table('users')->whereBetween('created_at',[$month,$now])->count(),
        );

        return view('admin', ['views' => $views, 'lastViews' => $lastViews,'users' => $users, 'count' => $count]);
    }

    
}
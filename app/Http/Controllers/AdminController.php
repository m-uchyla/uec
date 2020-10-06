<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

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

        $token = Http::asForm()->post('https://api.toornament.com/oauth/v2/token', [
            'grant_type' => 'client_credentials',
            'client_id' => 'e61fd46a3437441ae2ed72085mqhuwuo8gsggggskgk4og8owcckkckgcskws4kkk0000ocws8',
            'client_secret' =>'1l80dg7iyxs0s8ggocwg80s4k8gwcscc0k4gog04w4gs4gw40o',
            'scope' => 'organizer:registration',
            ])->json();

        $registrations = Http::withHeaders([
            'X-Api-Key' => 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U',
            'Authorization' => $token['access_token'],
            'Range' => 'registrations=0-16'
        ])->get('https://api.toornament.com/organizer/v2/tournaments/3784327726246748160/registrations');

        return view('admin', ['views' => $views, 'lastViews' => $lastViews,'users' => $users, 'count' => $count, 'registrations' => json_decode($registrations), 'test' => config('toornament_api.clientID')]);
    }

    
}
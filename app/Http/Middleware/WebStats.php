<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class WebStats
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('get')) {
            
            date_default_timezone_set('Europe/Warsaw');
            $now = date('Y-m');
            
            if(DB::table('stats')->where('month', $now)->exists()){
                DB::table('stats')->where('month', $now)->increment('views');
            }else{
                $data=array(
                    "month"=>$now,
                    "views"=>1,
                );
                DB::table('stats')->insert($data);
            }
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller {

    public function dashboard(){

        $main = DB::table('teams')->where('ownerID', Auth::id())->first();
        $invite = DB::table('teams-users')->where('userID', Auth::id())->where('isAccepted', 0)->get();
        
        $teams = DB::table('teams-users')
            ->join('teams', 'teams-users.teamID', '=', 'teams.teamID')
            ->select('teams.teamName')
            ->where('teams-users.userID', Auth::id())
            ->where('teams-users.isAccepted', 1)
            ->get();

        if($invite != null){
            foreach($invite as $i){
                $i->owner = (DB::table('teams')
                    ->join('users', 'teams.ownerID', '=', 'users.id')
                    ->select('users.nick')
                    ->where('teams.teamID', $i->teamID)
                    ->first())->nick;
                $i->team = (DB::table('teams')->where('teamID',$i->teamID)->select('teamName')->first())->teamName;
            }
        }

        if($main != null){
            $players = DB::table('teams-users')
            ->join('users', 'teams-users.userID', '=', 'users.id')
            ->select('users.*')
            ->where('teams-users.teamID', $main->teamID)
            ->get();
        }

        return view('dashboard', ['main' => $main, 'teams' => $teams, 'invite' => $invite, 'players' => $players]);
    }

    public function invite(Request $request){
        $teamID = $request->input('teamID');
        $email = $request->input('email');
        $userID = DB::table('users')->where('email', $email)->select('id')->first();

        $data=array(
            "teamID"=>$teamID,
            "userID"=>$userID,
            "isAccepted"=>0,
        );

        if (DB::table('teams-users')->where('teamID', $teamID)->where('userID', $userID)->doesntExist()){
            DB::table('teams-users')->insert($data);
        }

        return redirect()->route('dashboard');
    }

    public function acceptInvite(Request $request){
        $teamuserID = $request->input('teamuserID');

        DB::table('teams-users')->where('teamuserID', $teamuserID)->update(['isAccepted' => 1]);

        return redirect()->route('dashboard');
    }

    public function rejectInvite(Request $request){
        $teamuserID = $request->input('teamuserID');

        DB::table('teams-users')->where('teamuserID', $teamuserID)->delete();

        return redirect()->route('dashboard');
    }

    public function update(Request $request){

        $request->validate([
            'teamName' => ['required', 'max:255', 'min:2'],
            'logo' => ['required', 'max:255', 'min:4', 'active_url'],
            'email' => ['required', 'max:255', 'min:4', 'email'],
            'facebook' => ['nullable', 'max:255', 'min:4', 'active_url'],
            'ownerID' => ['required'],
        ]);

        $teamName = $request->input('teamName');
        $logo = $request->input('logo');
        $email = $request->input('email');
        $facebook = $request->input('facebook');
        $ownerID = $request->input('ownerID');

        $data=array(
            "teamName"=>$teamName,
            "logo"=>$logo,
            "facebook"=>$facebook,
            "email"=>$email
        );

        DB::table('teams')->where('ownerID',$ownerID)->update($data);

        return redirect()->route('dashboard');
    }

    public function insert(Request $request){

        $request->validate([
            'teamName' => ['required', 'max:255', 'min:2'],
            'logo' => ['required', 'max:255', 'min:4', 'active_url'],
            'email' => ['required', 'max:255', 'min:4', 'email'],
            'facebook' => ['nullable', 'max:255', 'min:4', 'active_url'],
            'ownerID' => ['required'],
        ]);

        $teamName = $request->input('teamName');
        $logo = $request->input('logo');
        $email = $request->input('email');
        $facebook = $request->input('facebook');
        $ownerID = $request->input('ownerID');

        $data=array(
            "teamName"=>$teamName,
            "logo"=>$logo,
            "facebook"=>$facebook,
            "ownerID"=>$ownerID,
            "email"=>$email
        );

        DB::table('teams')->insert($data);

        $teamID = DB::table('teams')->where('ownerID',$ownerID)->first()->teamID;

        $data1=array(
            "teamID"=>$teamID,
            "userID"=>$ownerID,
            "isAccepted"=>1
        );

        DB::table('teams-users')->insert($data1);

        return redirect()->route('dashboard');
    }
}
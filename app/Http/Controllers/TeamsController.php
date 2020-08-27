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
            ->get();

        if($invite != null){
            foreach($invite as $i){
                $i->owner = strval(DB::table('users')->where('id',$i->$userID)->select('nick')->first());
                $i->team = strval(DB::table('teams')->where('id',$i->$teamID)->select('teamName')->first());
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

    // public function viewArticle($id){

    //     $article = DB::table('articles')->where('id',$id)->first();
    //     DB::table('articles')->where('id',$id)->increment('views');
    //     $author = DB::table('users')->where('id',$article->author)->first();
    //     $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
    //     $contents = explode(PHP_EOL, $article->content);
    //     $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
    //     $also = DB::table('articles')->orderBy('views', 'desc')->latest()->simplePaginate(5);

    //     return view('articleView', ['article' => $article, 'featured' => $featured, 'contents' => $contents, 'also' => $also]);
    // }

    // public function getHomepage(){

    //     $articles = DB::table('articles')->latest()->paginate(3);
    //     $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
    //     $also = DB::table('articles')->orderBy('views', 'desc')->latest()->simplePaginate(5);

    //     foreach($articles as $article){
    //         $author = DB::table('users')->where('id',$article->author)->first();
    //         $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
    //     }

    //     return view('homepage', ['articles' => $articles, 'featured' => $featured, 'also' => $also]);
    // }

    // public function getAbout(){

    //     $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
    //     return view('about', ['featured' => $featured]);
    // }

    // public function edit(Request $request){
    //     $id = $request->input("articleID");
    //     $article = DB::table('articles')->where('id',$id)->first();
    //     return view('editArticle',['article'=> $article]);

    // }

    // public function delete(Request $request){
    //     $id = $request->input("articleID");
    //     $article = DB::table('articles')->where('id',$id)->delete();
    //     return redirect()->route('articles');

    // }

    public function update(Request $request){
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
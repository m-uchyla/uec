<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleInsertController extends Controller {

    // public function get(){

    //     $articles = DB::table('articles')->latest()->simplePaginate(5);
    //     $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();

    //     foreach($articles as $article){
    //         $author = DB::table('users')->where('id',$article->author)->first();
    //         $article->authorID = $article->author;
    //         $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
    //     }
    //     foreach($featured as $f){
    //         $f->author = (DB::table('users')->where('id',$f->author)->first())->name;
    //     }

    //     return view('articles', ['articles' => $articles, 'featured' => $featured]);
    // }

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

    // public function update(Request $request){
    //     $title = $request->input('title');
    //     $team = $request->input('team');
    //     $subtitle = $request->input('subtitle');
    //     $content = $request->input('content');
    //     $main_pic = $request->input('main_pic');
    //     $big_pic = $request->input('big_pic');
    //     $id = $request->input('id');

    //     $data=array(
    //         "title"=>$title,
    //         "team"=>$team,
    //         "subtitle"=>$subtitle,
    //         "content"=>$content,
    //         "big_pic"=>$big_pic,
    //         "main_pic"=>$main_pic
    //     );

    //     DB::table('articles')->where('id',$id)->update($data);

    //     return redirect()->route('articles');
    // }

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

        return redirect()->route('default');
    }
}
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

    public function viewArticle($id){

        $article = DB::table('articles')->where('id',$id)->first();
        DB::table('articles')->where('id',$id)->increment('views');
        $article->author = (DB::table('users')->where('id',$article->author)->first())->name;
        $contents = explode(PHP_EOL, $article->content);
        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();


        return view('articleView', ['article' => $article, 'featured' => $featured, 'contents' => $contents]);
    }

    public function getHomepage(){

        $articles = DB::table('articles')->where('isFeatured',0)->latest()->paginate(3);
        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();

        foreach($articles as $article){
            $article->author = (DB::table('users')->where('id',$article->author)->first())->name;
        }

        return view('test', ['articles' => $articles, 'featured' => $featured]);
    }

    public function getAbout(){

        $featured = DB::table('articles')->where('isFeatured',1)->latest()->get();
        return view('about', ['featured' => $featured]);
    }

    public function edit(Request $request){
        $id = $request->input("articleID");
        $article = DB::table('articles')->where('id',$id)->first();
        return view('editArticle',['article'=> $article]);

    }

    public function delete(Request $request){
        $id = $request->input("articleID");
        $article = DB::table('articles')->where('id',$id)->delete();
        return redirect()->route('articles');

    }

    public function update(Request $request){
        $title = $request->input('title');
        $team = $request->input('team');
        $subtitle = $request->input('subtitle');
        $content = $request->input('content');
        $main_pic = $request->input('main_pic');
        $big_pic = $request->input('big_pic');
        $id = $request->input('id');

        $data=array(
            "title"=>$title,
            "team"=>$team,
            "subtitle"=>$subtitle,
            "content"=>$content,
            "big_pic"=>$big_pic,
            "main_pic"=>$main_pic
        );

        DB::table('articles')->where('id',$id)->update($data);

        return redirect()->route('articles');
    }

    public function insert(Request $request){
        $author = $request->input('author');
        $title = $request->input('title');
        $team = $request->input('team');
        $subtitle = $request->input('subtitle');
        $content = $request->input('content');
        $main_pic = $request->input('main_pic');
        $big_pic = $request->input('big_pic');

        $data=array(
            "author"=>$author,
            "title"=>$title,
            "team"=>$team,
            "subtitle"=>$subtitle,
            "content"=>$content,
            "big_pic"=>$big_pic,
            "main_pic"=>$main_pic
        );

        DB::table('articles')->insert($data);

        return redirect()->route('articles');
    }
}
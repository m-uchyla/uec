<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function get(){

        $users = DB::table('users')->latest()->simplePaginate(5);

        return view('users', ['users' => $users]);
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
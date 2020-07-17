<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleInsertController extends Controller {

    public function get(){

        $articles = DB::table('articles')->simplePaginate(5);
        return view('articles', ['articles' => $articles]);
    }

    public function insert(Request $request){
        $author = $request->input('author');
        $title = $request->input('title');
        $team = $request->input('team');
        $subtitle = $request->input('subtitle');
        $content = $request->input('content');

        $data=array(
            "author"=>$author,
            "title"=>$title,
            "team"=>$team,
            "subtitle"=>$subtitle,
            "content"=>$content
        );

        DB::table('articles')->insert($data);

        return redirect()->route('articles');
    }
}
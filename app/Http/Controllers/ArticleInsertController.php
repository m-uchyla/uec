<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleInsertController extends Controller {

    public function get(){

        $articles = DB::table('articles')->latest()->simplePaginate(5);
        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();

        foreach($articles as $article){
            $author = DB::table('users')->where('id',$article->author)->first();
            $article->authorID = $article->author;
            $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
        }
        foreach($featured as $f){
            $f->author = (DB::table('users')->where('id',$f->author)->first())->name;
        }

        return view('articles', ['articles' => $articles, 'featured' => $featured]);
    }

    public function viewArticle($id){

        $article = DB::table('articles')->where('id',$id)->first();
        DB::table('articles')->where('id',$id)->increment('views');
        $author = DB::table('users')->where('id',$article->author)->first();
        $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
        $contents = explode(PHP_EOL, $article->content);
        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
        $also = DB::table('articles')->orderBy('views', 'desc')->latest()->simplePaginate(5);

        return view('articleView', ['article' => $article, 'featured' => $featured, 'contents' => $contents, 'also' => $also]);
    }

    public function getHomepage(){

        $articles = DB::table('articles')->latest()->paginate(3);
        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
        $also = DB::table('articles')->orderBy('views', 'desc')->latest()->simplePaginate(5);

        foreach($articles as $article){
            $author = DB::table('users')->where('id',$article->author)->first();
            $article->author = $author->name.(' "'.$author->nick.'" ').$author->lastName;
        }

        return view('homepage', ['articles' => $articles, 'featured' => $featured, 'also' => $also]);
    }

    public function getAbout(){

        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
        return view('about', ['featured' => $featured]);
    }

    public function getTerms(){

        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
        return view('terms', ['featured' => $featured]);
    }

    public function getRegulamin(){

        $featured = DB::table('articles')->where('isFeatured','>',0)->orderBy('isFeatured','asc')->get();
        return view('regulamin', ['featured' => $featured]);
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

        $request->validate([
            'title' => ['required', 'max:255', 'min:4'],
            'team' => ['required', 'max:255', 'min:2'],
            'subtitle' => ['required', 'max:255', 'min:4'],
            'content' => ['required', 'max:10010', 'min:4'],
            'main_pic' => ['required', 'ends_with:png,jpg,jpeg', 'max:255', 'min:4', 'active_url'],
            'big_pic' => ['ends_with:png,jpg,jpeg', 'max:255', 'nullable', 'active_url'],
        ]);

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

        $request->validate([
            'author' => ['required'],
            'title' => ['required', 'max:255', 'min:4'],
            'team' => ['required', 'max:255', 'min:2'],
            'subtitle' => ['required', 'max:255', 'min:4'],
            'content' => ['required', 'max:10010', 'min:4'],
            'main_pic' => ['required', 'ends_with:png,jpg,jpeg', 'max:255', 'min:4', 'active_url'],
            'big_pic' => ['ends_with:png,jpg,jpeg', 'max:255', 'nullable', 'active_url'],
        ]);

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
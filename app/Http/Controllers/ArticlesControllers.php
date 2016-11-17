<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesControllers extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        //return 'articles';
        return view('articles.index')->with('articles',$articles);
    }

    public function show($id){
        $article = Article::find($id);
//        if(is_null($article)){
//            abort(404);
//        }
        //dd($artilce);
        return view('articles.show',compact('article'));
    }
}

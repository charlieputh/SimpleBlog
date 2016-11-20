<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesControllers extends Controller
{
    //
    public function index(){
        $articles = Article::latest()->get();
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

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        //dd($request->all());
        //接受post过来的数据
        //存入数据库
        //重定向
        $input=$request->all();

       // $input['published_at']=Carbon::now();
        Article::create($input);
        return redirect('/articles');

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
}

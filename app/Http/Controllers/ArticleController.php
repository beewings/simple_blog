<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;


class ArticleController extends Controller
{
    public function home(){
        return view('articles.home');
    }
     public  function index(){
    	$article = Article::all();
    	return view('articles.index', compact('article'));
    }
    
    public function create(){
    	return view('articles.create');
    }
    public function store(ArticleFormRequest $request){
    	$title = Input::get('title');
    	$content = Input::get('content');

    	Article::create([
    		'title'=>$title,
    		'content'=>$content

    	]);
    	return redirect()->route('article.index');
    }
    public function edit($id){
    	$article = Article::find($id);
    	return view('articles.edit',compact('article'));
    }
    public function update($id, ArticleFormRequest $request){
    	$article = Article::find($id);
    	$article->update([
    		'title'=>$request->get('title'),
    		'content'=>$request->get('content')
    	]);
    	return redirect()->route('article.index');
    }
    public function show($id){
    	$article = Article::find($id);
    	return view('articles.show')->with('article',$article);
    }
    public function destroy($id){
     	$article = Article::find($id);
     	$article->delete();
     	return redirect()->route('article.index');
   	
    }
}


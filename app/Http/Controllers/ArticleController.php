<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::all();
        return view('pages.article',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutsA.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nom"=>["required", "min:1", "max:200"],
            "description"=>["required", "min:1", "max:200"],
            "date"=>["required", "min:1", "max:200"],
            "user_id"=>["required", "min:1", "max:200"],
        ]);
        $data = new Article;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->user_id = $request->user_id;
        $data->save();
        return redirect()->route('articles.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $data = $article;
        return view('layoutsA.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('layoutsA.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        request()->validate([
            "nom"=>["required", "min:1", "max:200"],
            "description"=>["required", "min:1", "max:200"],
            "date"=>["required", "min:1", "max:200"],
            "user_id"=>["required", "min:1", "max:200"],
        ]);
      
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date = $request->date;
        $article->user_id = $request->user_id;
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}

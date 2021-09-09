<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Commentaire::all();
        return view('pages.Commentaire',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutsC.create');
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
            "contenu"=>["required", "min:1", "max:200"],
            "article_id"=>["required", "min:1", "max:200"],
        ]);
        $data = new Commentaire;
        $data->contenu = $request->contenu;
        $data->article_id = $request->article_id;
        $data->save();
        return redirect()->route('commentaires.index');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $Commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        $data = $commentaire;
        return view('layoutsC.show',compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $Commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        
        return view('layoutsC.edit',compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        request()->validate([
            
            "contenu"=>["required", "min:1", "max:200"],
            "article_id"=>["required", "min:1", "max:200"],
        ]);
        

        $commentaire->contenu = $request->contenu;
        $commentaire->article_id = $request->article_id;
        $commentaire->save();
      
        return redirect()->route('commentaires.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        

        $commentaire->delete();
        return redirect()->route('videos.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('pages.user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Role::all();
        return view('layoutsU.create', compact('data'));
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
            "prenom"=>["required", "min:1", "max:200"],
            "age"=>["required", "min:1", "max:200"],
            "naissance"=>["required", "min:1", "max:200"],
            "email"=>["required", "min:1", "max:200"],
            "password"=>["required", "min:1", "max:200"],
            "photo"=>["required", "min:1", "max:200"],
            "role_id"=>["required", "min:1", "max:200"],
            

        ]);

        $data = new User;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->age = $request->age;
        $data->naissance = $request->naissance;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->photo = $request->photo;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect()->route('users.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('layoutsU.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data=Role::all();
        return view('layoutsU.edit',compact('user','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        request()->validate([
            "nom"=>["required", "min:1", "max:200"],
            "prenom"=>["required", "min:1", "max:200"],
            "age"=>["required", "min:1", "max:200"],
            "naissance"=>["required", "min:1", "max:200"],
            "email"=>["required", "min:1", "max:200"],
            "password"=>["required", "min:1", "max:200"],
            "photo"=>["required", "min:1", "max:200"],
            "role_id"=>["required", "min:1", "max:200"],
            

        ]);

        
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->naissance = $request->naissance;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->photo;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

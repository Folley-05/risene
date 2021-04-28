<?php

namespace App\Http\Controllers;

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
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response().json([
            "reponse"=>"oui je saus que je doit coder ca"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response().json([
            "reponse"=>"oui je saus que je doit coder ca"
        ], 200);
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
        return response().json([
            "reponse"=>"oui je saus que je doit coder ca"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return response().json([
            "reponse"=>"oui je saus que je doit coder ca"
        ], 200);
    }

    /**
     * Authenticate the user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
        $user=User::where('name', $request->name)->get();
        // return $user;
        if($user[0]->password===$request->password)
            return $user;
        else 
            return response()->json([
                'echec'=>"echec de l'authentification"
            ], 200);
    }

}

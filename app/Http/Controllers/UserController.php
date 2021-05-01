<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $validate=$request->validate([
            'name'=>'required|unique:users,name',
            'email'=>'required',
            'password'=>'required|unique:users,password'
        ]);
        $request->merge([
            'api_token'=>Str::random(10),
            'remenber_token'=>Str::random(10),
            'email_verified_at'=>now()
        ]);
        if($validate) {
            if(User::create($request->all())) {
                return response()->json([
                    'succes'=>"user cree avec succes",
                ], 200);
            }
            else {
                return response()->json([
                    'echec'=>"user non cree",
                ], 500);
            }
        }
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        if($id->update($request->all())) {
            return response()->json([
                'success'=>"user mis a jour"
            ]);
        }
        else {
            return response()->json([
                "echec"=>"echec de la mise a jour"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        if($id->delete()) {
			return response()->json([
				'success'=>"user supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"user non supprime"
			], 500);
		}
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

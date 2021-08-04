<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function register(request $request){
        // get values and validate
        $fields=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        // create user
        $user=User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);

        // generate token with myapptoken as a key
        $token=$user->createToken('myapptoken')->plainTextToken;


        $response=[
            'user'=>$user,
            'token' =>$token
        ];

        return response($response,201);  //201=> everything successful and something was created
    }

    public function logout(request $request){
        auth()->user()->tokens()->delete();

        return[
            'message'=>'Successfully logged out'
        ];
    }
}

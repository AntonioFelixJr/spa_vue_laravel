<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class ControllerUser extends Controller
{

    public function login(Request $request)
    {
        $data = $request->all();
        $validacao = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        if ($validacao->fails()) {
            return $validacao->errors();
        }

        if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
            $user = auth()->user();
            $user->token = $user->createToken($user->email)->accessToken;
            return $user;
        }
        else {
            return ["status" => false];
        }
        
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validacao = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        if ($validacao->fails()) {
            return $validacao->errors();
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->token = $user->createToken($user->email)->accessToken;

        return $user;
    }
}

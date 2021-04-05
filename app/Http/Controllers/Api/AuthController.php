<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'required|max:30'
        ]);

        $validatedData = [
            'name' => $request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
        ];

        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user'=> $user, 'access_token'=> $accessToken, 'message' => '회원가입에 성공 하셨습니다']);
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'=>'email|required',
            'password' => 'required'
        ]);

        $loginData = [
            'email'=>$request->email,
            'password' => $request->password
        ];

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response(['access_token' => $accessToken, 'message' => '로그인에 성공 하셨습니다']);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => '로그아웃 됐습니다'
        ]);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}

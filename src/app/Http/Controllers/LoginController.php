<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //


    public function showRegisterForm()
    {
        return view('loginForm');
    }

    public function hello()
    {
        return "hello ";
    }


    public function register(Request $request)
    {
        return response()->json(["name" => $request->name, "email" => $request->email, "role" => $request->role, "password" => $request->password]);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'role' => 'required|string',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/home')->with('Success', '>>> User registred successfully <<<');
    }
}

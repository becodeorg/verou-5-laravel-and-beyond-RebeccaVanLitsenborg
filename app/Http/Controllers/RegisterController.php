<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sessions.register');
    }

    public function create (Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:3|max:60",
            "email" => "required|email",
            "password" => "required|min:8|confirmed"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

    }


}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('sessions.login');
    }

    public function handleLogin(Request $request)
    {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect("/");
        }

        return back();
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect("/");
    }
}

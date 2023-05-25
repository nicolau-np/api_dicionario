<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        $type = 'login';
        return view('users.login', compact('type'));
    }

    public function logar(Request $request)
    {

        $this->validate(
            $request,
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|string|min:6',
            ],[],[
                'email' => 'E-mail',
                'password' => 'Palavra-Passe',
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        } else {
            return back()->with(['error' => "Palavra passe incorrectas"]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

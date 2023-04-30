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
                'email' => 'required|email|exists:usuarios,email',
                'password' => 'required|string|min:6',
            ],[],[
                'email' => 'E-mail',
                'password' => 'Palavra-Passe',
            ]
        );

        $user = User::where(['email' => $request->email])->first();

        if ($user->estado == "off") {
            return back()->with(['error' => "Usuário bloqueado, sem permissão."]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
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

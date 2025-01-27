<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request) {
        // TODO: Validate data

        // Create User
        $user = new User();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->ci = $request->ci;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('home'));
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('home'));
        }
 
        return back()->withErrors([
            'email' => 'Los credenciales no son correctos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect(route('login'));
    }
}

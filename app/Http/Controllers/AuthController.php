<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        $title = 'Login - Sudirection';

        return view('auth.login', [
            'title' => $title
        ]);
    }

    public function registerView()
    {
        $title = 'Register - Sudirection';

        return view('auth.register', [
            'title' => $title
        ]);
    }

    public function registerPost(RegisterRequest $request)
    {
        $validatedCredentials = $request->validated();

        User::create($validatedCredentials);

        return redirect()->route('landing');
    }

    public function loginPost(LoginRequest $request)
    {
        $validatedCredentials = $request->validated();

        if (Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->route('landing');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.view');
    }
}

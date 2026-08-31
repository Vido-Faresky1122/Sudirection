<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function registerPost()
    {
        
    }

    public function loginPost()
    {
        
    }

    public function logout()
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Admin Dashboard - Sudirection';

        return view('profile.admin.index', [
            'title' => $title
        ]);
    }
}

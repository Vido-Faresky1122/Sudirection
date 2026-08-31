<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Sudirection - Home';

        return view('landing', [
            'title' => $title
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $title = 'About Us - Sudirection';

        return view('about-us', [
            'title' => $title
        ]);
    }
}

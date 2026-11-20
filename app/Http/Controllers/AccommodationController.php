<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $title = 'Accommodations - Sudirection';
        $user = auth()->user();

        return view('accommodations.index', [
            'title' => $title,
            'user'=> $user
        ]);
    }

    public function create()
    {
        $title = 'Create Accommodation - Sudirection';

        return view('accommodations.create', [
            'title' => $title
        ]);
    }

    public function store()
    {

    }

    public function show($id)
    {
        $title = 'Accommodation Details - Sudirection';
        $user = auth()->user();


        return view('accommodations.show', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $title = 'Edit Accommodation - Sudirection';

        return view('accommodations.edit', [
            'title' => $title
        ]);
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $title = 'Places - Sudirection';
        $user = auth()->user();

        return view('places.index', [
            'title' => $title,
            'user'=> $user,
        ]);
    }

    public function create()
    {
        $title = 'Create Place - Sudirection';

        return view('places.create', [
            'title' => $title
        ]);
    }

    public function store()
    {

    }

    public function show($id)
    {
        $title = 'Place Details - Sudirection';
        $user = auth()->user();
        $place = Place::findOrFail($id);

        return view('places.show', [
            'title' => $title,
            'place' => $place,
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $title = 'Edit Place - Sudirection';

        return view('places.edit', [
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

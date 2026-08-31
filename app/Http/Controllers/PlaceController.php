<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $title = 'Places - Sudirection';

        return view('places.index', [
            'title' => $title
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

        return view('places.show', [
            'title' => $title
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

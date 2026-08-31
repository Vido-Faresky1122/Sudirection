<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $title = 'Accommodations - Sudirection';

        return view('accommodations.index',[
            'title' => $title
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

        return view('accommodations.show', [
            'title' => $title
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

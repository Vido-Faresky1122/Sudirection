<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        return view('place.index');
    }

    public function create()
    {
        return view('place.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view('place.show');
    }

    public function edit($id)
    {
        return view('place.edit');
    }

    public function update($id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}

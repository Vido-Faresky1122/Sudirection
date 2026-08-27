<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        return view('accommodations.index');
    }

    public function create()
    {
        return view('accommodations.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view('accommodations.show');
    }

    public function edit($id)
    {
        return view('accommodations.edit');
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

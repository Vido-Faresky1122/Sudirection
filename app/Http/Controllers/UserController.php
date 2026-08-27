<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.user.index');
    }

    public function showFavoritesPlaces()
    {
        return view('profile.user.favorites.places');
    }

    public function showFavoritesAccommodations()
    {
        return view('profile.user.favorites.accommodations');
    }

    public function showHistoriesPlaces()
    {
        return view('profile.user.histories.experiences');
    }
}

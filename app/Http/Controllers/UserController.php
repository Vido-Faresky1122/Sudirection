<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'User Profile - Sudirection';

        return view('profile.user.index', [
            'title' => $title
        ]);
    }

    public function showFavoritesPlaces()
    {
        $title = 'Favorite Places - Sudirection';

        return view('profile.user.favorites.places', [
            'title' => $title
        ]);
    }

    public function showFavoritesAccommodations()
    {
        $title = 'Favorite Accommodations - Sudirection';

        return view('profile.user.favorites.accommodations', [
            'title' => $title
        ]);
    }

    public function showHistoriesPlaces()
    {
        $title = 'Place Histories - Sudirection';

        return view('profile.user.histories.experiences', [
            'title' => $title
        ]);
    }

    public function showHistoriesAccommodations()
    {
        $title = 'Accommodation Histories - Sudirection';

        return view('profile.user.histories.accommodations', [
            'title' => $title
        ]);
    }
}

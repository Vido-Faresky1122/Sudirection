<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request, $id)
    {
        $users = User::all();
        $user = User::get()->where('id', $id)->first();
        $title = 'Admin Dashboard - Sudirection';
        $tab = $request->query('tab', 'favorites');
        $type = $request->query('type', 'accommodations');

        $items = match ("{$tab}_{$type}") {
            'favorites_accommodations' => [
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Marina Bay Sands', 'location' => 'Singapore', 'rating' => '4.7', 'isFavorite' => true],
            ],
            'favorites_places' => [
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Statue of Liberty', 'location' => 'USA', 'rating' => '4.5', 'isFavorite' => true],
            ],
            'histories_accommodations' => [
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Marina Bay Sands', 'location' => 'Singapore', 'rating' => '4.7', 'isFavorite' => true],
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Sentosa', 'location' => 'Singapore', 'rating' => '4.3', 'isFavorite' => true],
            ],
            'histories_places' => [
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Statue of Liberty', 'location' => 'USA', 'rating' => '4.5', 'isFavorite' => true],
                ['image' => asset('assets/images/hhi.png'), 'title' => 'Central Park', 'location' => 'USA', 'rating' => '4.2', 'isFavorite' => true],
            ],
            default => [],
        };


        return view('profile.admin.index', [
            'title' => $title,
            'tab' => $tab,
            'type' => $type,
            'items' => $items,
            'user' => $user,
            'users' => $users,
        ]);
    }
}

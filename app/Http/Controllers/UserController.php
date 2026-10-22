<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request, $id)
    {
        $user = User::select('role')->where('id', $id)->first();

        $titleUsers = 'User Profile - Sudirection';
        $titleAdmin = 'Admin Profile - Sudirection';
        $tab = $request->query('tab', 'favorites');
        $type = $request->query('type', 'accommodations');

        // Dummy sementara
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


        if ($user->role === 'admin') {
            return view('profile.admin.index', [
                'title' => $titleAdmin,
                'tab' => $tab,
                'type' => $type,
                'items' => $items,
                'user' => $user,
            ]);
        }


        return view('profile.users.index', [
            'title' => $titleUsers,
            'tab' => $tab,
            'type' => $type,
            'items' => $items,
            'user' => $user,
        ]);
    }
}

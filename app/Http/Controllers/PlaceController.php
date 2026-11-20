<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    public function index()
    {
        $title = 'Places - Sudirection';
        $user = auth()->user();

        return view('places.index', [
            'title' => $title,
            'user' => $user,
        ]);
    }

    public function create()
    {
        $title = 'Create Place - Sudirection';

        return view('places.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'tagline' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $validatedRequest['image'] = $request->file('image')->store('places', 'public');
        }

        Place::create($validatedRequest);

        return redirect()->route('places.index');
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

    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);

        $validatedRequest = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'tagline' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            if ($place->image && Storage::disk('public')->exists($place->image)) {
                Storage::disk('public')->delete($place->image);
            }

            $validatedRequest['image'] = $request->file('image')->store('places', 'public');
        } else {
            unset($validatedRequest['image']);
        }

        $place->update($validatedRequest);

        return redirect()->route('places.index');
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);

        if ($place->image && Storage::disk('public')->exists($place->image)) {
            Storage::disk('public')->delete($place->image);
        }

        $place->delete();

        return redirect()->route('places.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccommodationController extends Controller
{
    public function index()
    {
        $title = 'Accommodations - Sudirection';
        $user = auth()->user();

        return view('accommodations.index', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function create()
    {
        $title = 'Create Accommodation - Sudirection';

        return view('accommodations.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'place_id' => ['required', 'integer', 'exists:places,id'],
            'name' => ['required', 'string', 'max:255'],
            'tagline' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'in:Hotel,Resort,Villas,Apartment'],
            'price' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:30'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $validatedRequest['image'] = $request->file('image')->store('accommodations', 'public');
        }

        Accomodation::create($validatedRequest);

        return redirect()->route('accommodations.index');
    }

    public function show($id)
    {
        $title = 'Accommodation Details - Sudirection';
        $user = auth()->user();


        return view('accommodations.show', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $title = 'Edit Accommodation - Sudirection';

        return view('accommodations.edit', [
            'title' => $title
        ]);
    }

    public function update(Request $request, $id)
    {
        $accommodation = Accomodation::findOrFail($id);

        $validatedRequest = $request->validate([
            'place_id' => ['required', 'integer', 'exists:places,id'],
            'name' => ['required', 'string', 'max:255'],
            'tagline' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'in:Hotel,Resort,Villas,Apartment'],
            'price' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:30'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            if ($accommodation->image && Storage::disk('public')->exists($accommodation->image)) {
                Storage::disk('public')->delete($accommodation->image);
            }

            $validatedRequest['image'] = $request->file('image')->store('accommodations', 'public');
        } else {
            unset($validatedRequest['image']);
        }

        $accommodation->update($validatedRequest);

        return redirect()->route('accommodations.index');
    }

    public function destroy($id)
    {
        $accommodation = Accomodation::findOrFail($id);

        if ($accommodation->image && Storage::disk('public')->exists($accommodation->image)) {
            Storage::disk('public')->delete($accommodation->image);
        }

        $accommodation->delete();

        return redirect()->route('accommodations.index');
    }
}

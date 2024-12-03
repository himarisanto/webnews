<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all(); 
        return view('team.coach', compact('coaches')); 
    }

    public function create()
    {
        return view('team.coach_create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imageName = $request->name . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('coaches', $imageName, 'public');
        }

        Coach::create([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'image' => $imagePath,
        ]);

        return redirect()->route('coaches.index')->with('success', 'Coach added successfully!');
    }

    public function update(Request $request, Coach $coach)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($coach->image) {
                Storage::disk('public')->delete($coach->image);
            }

            $imageName = $request->name . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();

            $coach->image = $request->file('image')->storeAs('coaches', $imageName, 'public');
        }

        $coach->update([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'image' => $coach->image,
        ]);

        return redirect()->route('coaches.index')->with('success', 'Coach updated successfully!');
    }
}

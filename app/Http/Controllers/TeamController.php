<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class TeamController extends Controller
{
 
    public function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'birth_date' => 'required|date',
            'position' => 'required|string|max:255',
            'squad_number' => 'required|integer',
            'previous_club' => 'required|string|max:255',
            'jumlah_gol' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('team-images', 'public');
        }

        Team::create($validated);

        return redirect()->route('team.index')->with('success', 'Team member added successfully.');
    }

  
    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

 
    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'birth_date' => 'required|date',
            'position' => 'required|string|max:255',
            'squad_number' => 'required|integer',
            'previous_club' => 'required|string|max:255',
            'jumlah_gol' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
                
            }
            $validated['image'] = $request->file('image')->store('team-images', 'public');
        }

        $team->update($validated);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }

  
    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }
}

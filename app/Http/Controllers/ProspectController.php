<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;


class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('prospects.create');
        //***************************** */
        $prospects = Prospect::all();
        return view('prospects.index', compact('prospects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('prospects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|min:2|max:50',
            'prenom' => 'required|string|min:2|max:50',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'date_naissance' => 'required|date',
            'besoin' => 'required|string',
        ]);

        $prospect = Prospect::create($validated);

        return view('prospects.confirmation', [
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'besoin' => $validated['besoin'],
        ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //******************* */
        $prospect = Prospect::findOrFail($id);
        return view('prospects.show', ['prospect' => $prospect]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //***************************** */
        $prospect = Prospect::findOrFail($id);
        return view('prospects.edit', ['prospect' => $prospect]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //**************************** */
        $validated = $request->validate([
            'nom' => 'required|string|min:2|max:50',
            'prenom' => 'required|string|min:2|max:50',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'date_naissance' => 'required|date',
            'besoin' => 'required|string',
        ]);

        $prospect = Prospect::findOrFail($id);
        $prospect->update($validated);

        return redirect()->route('prospects.index')->with('success', 'Prospect mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //************************ */
        $prospect = Prospect::findOrFail($id);
        $prospect->delete();
        return redirect()->route('prospects.index')->with('success', 'Prospect supprimé avec succès.');
    }
}

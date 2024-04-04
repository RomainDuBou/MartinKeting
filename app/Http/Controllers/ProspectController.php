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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
              return view('prospects.create');

    }
  
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
    
        return view('prospect.confirmation', [
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'besoin' => $validated['besoin'],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

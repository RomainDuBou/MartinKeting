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
            $prospects = Prospect::all()->sortByDesc('created_at');
    
            return view('prospects.index', [
                'prospects' => $prospects,
            ]); 
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
    
        return view('prospects.confirmation', [
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
    public function show($id) {

        $prospect = Prospect::findOrFail($id);
    
        return view('prospects.show', [
            'prospect' => $prospect,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {

        $prospect = Prospect::findOrFail($id);
    
        return view('prospects.edit', [
            'prospect' => $prospect,
        ]);
    }

    public function update(Request $request, $id) {

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
    
        return view('prospects.updateconfirmation')->with('message', 'Le prospect a été modifié avec succès 😉');
    
    }

    public function delete($id) {
        $prospect = Prospect::findOrFail($id);
        $prospect->delete();
    
        return view('prospects.deleteconfirmation')->with('message', 'Le prospect a bien été supprimé.');

     }
     
    }
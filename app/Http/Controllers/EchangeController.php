<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Echange;
use App\Models\Prospect;


class EchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('echanges.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prospect_id' => 'required|exists:prospects,id',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'contenu' => 'required|string',
            'type' => 'required|in:telephone,email,echange_direct,courrier',
        ]);

        try {
            $prospect = Prospect::findOrFail($request->input('prospect_id'));
        } catch (ModelNotFoundException $e) {
            // Redirection avec un message d'erreur si l'ID du prospect n'existe pas
            return redirect()->back()->with('error', 'Prospect non trouvé');
        }

        $echange = new Echange();
        $echange->prospect_id = $request->input('prospect_id');
        $echange->date = $request->input('date');
        $echange->heure = $request->input('heure');
        $echange->contenu = $request->input('contenu');
        $echange->type = $request->input('type');
        $echange->save();

        // Redirection avec un message de succès
        return redirect()->route('echanges.confirmation')->with('success', 'Echange créé avec succès!');
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

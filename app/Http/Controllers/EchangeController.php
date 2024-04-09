<?php

namespace App\Http\Controllers;

use App\Models\Echange;
use Illuminate\Http\Request;

class EchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $echanges = Echange::all();
        return view('echanges.index', compact('echanges'));
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
            'date' => 'required|date',
            'heure' => 'required',
            'type_communication' => 'required',
            'contenu' => 'required',
        ]);

        Echange::create($request->all());

        return redirect()->route('echanges.index')->with('success', 'Échange créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $echange = Echange::findOrFail($id);
        return view('echanges.edit', compact('echange'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'heure' => 'required',
            'type_communication' => 'required',
            'contenu' => 'required',
        ]);

        $echange = Echange::findOrFail($id);
        $echange->update($request->all());

        return redirect()->route('echanges.index')->with('success', 'Échange mis à jour avec succès.');
    }
}

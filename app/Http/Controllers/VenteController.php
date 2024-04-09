<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function showByClient($clientId)
    {
        $client = Client::findOrFail($clientId);
        $ventes = $client->ventes;

        return view('show_by_client', compact('client', 'ventes'));
    }


    public function ventesByClient(Client $client)
    {
        $ventes = $client->ventes()->get();
        return view('ventes.ventes_by_client', compact('client', 'ventes'));
    }

    /**
     * Display the specified vente associated with a specific client.
     */
    public function showByClientVente(Client $client, Vente $vente)
    {
        if ($vente->client_id !== $client->id) {
            abort(404);
        }

        return view('ventes.show_by_client', compact('client', 'vente'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventes = Vente::all();
        return view('ventes.index', compact('ventes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = \App\Models\Client::all();
        return view('ventes.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'montant_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'titre' => 'required',
            'description' => 'required',
            'client_id' => 'required|exists:clients,id',

        ]);

        $vente = new Vente($request->all());
        $vente->client_id = $request->client_id;
        $vente->save();

        return redirect()->route('ventes.index')->with('success', 'Vente créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vente = Vente::findOrFail($id);

        return view('ventes.show', compact('vente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vente = Vente::findOrFail($id);

        return view('ventes.edit', compact('vente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required',
            'montant_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'titre' => 'required',
            'description' => 'required',
        ]);
        $vente = Vente::findOrFail($id);
        $vente->update($request->all());

        return redirect()->route('ventes.index')->with('success', 'Vente mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vente = Vente::findOrFail($id);
        $vente->delete();

        return redirect()->route('ventes.index')->with('success', 'Vente supprimée avec succès.');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Vente;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

           // Charger tous les échanges avec leurs relations prospect correspondantes
              $ventes = Vente::with('client')->get()->sortByDesc('created_at');

              return view('ventes.index', ['ventes' => $ventes]);
        
    }
    public function create()
    {
        $clients = Client::all(); 
        return view('ventes.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'date' => 'required|date',
            'montant_HT' => 'required|numeric',
            'TVA' => 'required|numeric',
            'titre' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $vente = new Vente();
        $vente->client_id = $validatedData['client_id'];
        $vente->date = $validatedData['date'];
        $vente->montant_HT = $validatedData['montant_HT'];
        $vente->TVA = $validatedData['TVA'];
        $vente->titre = $validatedData['titre'];
        $vente->description = $validatedData['description'];
        $vente->save();

          $client = Client::findOrFail($vente->client_id);
    
        return view('ventes.confirmation')->with('success', 'Vente créée avec succès!')->with('vente', $vente)->with('client', $client);    
    }


  
    public function show(string $id)
{
    try {
        // Récupérer le prospect correspondant à l'ID
        $client = Client::findOrFail($id);
        
        // Récupérer tous les échanges associés à ce prospect
        $ventes = $client->ventes()->orderByDesc('created_at')->get();
        
        // Passer le prospect et ses échanges associés à la vue
        return view('ventes.show', compact('client', 'ventes'));
    } catch (ModelNotFoundException $e) {
        // Retourner une vue avec un message d'erreur si le prospect n'existe pas
        return view('ventes.show')->with('error', 'Client non trouvé');
    }
}
  
    public function edit(string $id)
    {
        $vente = Vente::findOrFail($id);

        $client = Client::findOrFail($vente->client_id);

        return view('ventes.edit')->with('vente', $vente)->with('client', $client);
        
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'montant_HT' => 'required|numeric',
            'TVA' => 'required|numeric',
            'titre' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $vente = Vente::findOrFail($id);
        $vente->date = $validatedData['date'];
        $vente->montant_HT = $validatedData['montant_HT'];
        $vente->TVA = $validatedData['TVA'];
        $vente->titre = $validatedData['titre'];
        $vente->description = $validatedData['description'];
        $vente->save(); //

         // Charger les informations du prospect correspondant à l'échange
         $client = Client::findOrFail($vente->client_id);

        return view('ventes.updateconfirmation')->with('success', 'Vente modifiée avec succès!')->with('vente', $vente)->with('client', $client);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }
}

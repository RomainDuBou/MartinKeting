<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Prospect;

class ClientController extends Controller
{

    public function index()
    {
            $clients = Client::all()->sortByDesc('created_at');
    
            return view('clients.index', [
                'clients' => $clients,
            ]); 
    }

    public function create(Request $request)
    {
        $prospectId = $request->input('id');

        $prospect = Prospect::findOrFail($prospectId);

        return view('clients.create', [
            'prospect' => $prospect
        ]);
    }

    public function store(Request $request)
    {

        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->date_naissance = $request->date_naissance;
        $client->adresse_postale = $request->adresse_postale; 
        $client->delai_paiement_jour = $request->delai_paiement_jour; 
        $client->prospect_id = $request->prospect_id; 
        $client->save();

        $prospect = Prospect::findOrFail($request->prospect_id);
        // $prospect->delete();

        return view('clients.confirmation')->with('message', 'Le prospect a été converti en client avec succès.')->with('client', $client)->with('prospect', $prospect);
    }
    
   
    public function show($id) {

        $client = Client::findOrFail($id);
    
        return view('clients.show', [
            'client' => $client,
        ]);
    }

    public function edit($id) {

        $client = Client::findOrFail($id);
    
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

 
    public function update(Request $request, $id) {
        // Trouver le client à mettre à jour
        $client = Client::findOrFail($id);
        
        // Mettre à jour les attributs du client avec les données du formulaire
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->date_naissance = $request->date_naissance;
        $client->adresse_postale = $request->adresse_postale;
        $client->delai_paiement_jour = $request->delai_paiement_jour;
    
        // Enregistrer les modifications
        $client->save();
    
        // Rediriger vers la vue de confirmation avec un message
        return view('clients.updateconfirmation')->with('message', 'Les informations du client ont été mises à jour avec succès.')->with('client', $client);
    }

    public function delete($id) {
        $client = Client::findOrFail($id);
        $client->delete();

        return view('clients.deleteconfirmation')->with('message', 'Le client a bien été supprimé.');

     }
}

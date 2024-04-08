<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Echange;
use App\Models\Prospect;


class EchangeController extends Controller
{
    public function index()
    {
        // Charger tous les échanges avec leurs relations prospect correspondantes
        $echanges = Echange::with('prospect')->get()->sortByDesc('created_at');

        return view('echanges.index', ['echanges' => $echanges]);
    }

    public function create()
    {
        $prospects = Prospect::all();

        return view('echanges.create', ['prospects' => $prospects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'prospect_id' => 'required|exists:prospects,id',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'contenu' => 'required|string',
            'type' => 'required|in:telephone,email,echange_direct,courrier',
        ]);

        // try {
        //     $prospect = Prospect::findOrFail($request->input('prospect_id'));
        // } catch (ModelNotFoundException $e) {
        //     // Retourner une vue avec un message d'erreur si l'ID du prospect n'existe pas
        //     return view('echanges.create')->with('error', 'Prospect non trouvé');
        // }

        $echange = new Echange();
        $echange->prospect_id = $request->input('prospect_id');
        $echange->date = $request->input('date');
        $echange->heure = $request->input('heure');
        $echange->contenu = $request->input('contenu');
        $echange->type = $request->input('type');
        $echange->save();

        // Charger les informations du prospect correspondant à l'échange
        $prospect = Prospect::findOrFail($echange->prospect_id);

        // Retourner une vue avec un message de succès et les variables $echange et $prospect
        return view('echanges.confirmation')->with('success', 'Echange créé avec succès!')->with('echange', $echange)->with('prospect', $prospect);
    }

    public function show(string $id)
{
    try {
        // Récupérer le prospect correspondant à l'ID
        $prospect = Prospect::findOrFail($id);
        
        // Récupérer tous les échanges associés à ce prospect
        $echanges = $prospect->echanges()->orderByDesc('created_at')->get();
        
        // Passer le prospect et ses échanges associés à la vue
        return view('echanges.show', compact('prospect', 'echanges'));
    } catch (ModelNotFoundException $e) {
        // Retourner une vue avec un message d'erreur si le prospect n'existe pas
        return view('echanges.show')->with('error', 'Prospect non trouvé');
    }
}


    public function edit(string $id)
    {
        $echanges = Echange::findOrFail($id);
    
        return view('echanges.edit', [
            'echange' => $echanges,
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'contenu' => 'required|string',
            'type' => 'required|in:telephone,email,echange_direct,courrier',
        ]);
    
        try {
            // Récupérer l'échange à modifier
            $echange = Echange::findOrFail($id);
            
            // Mettre à jour les attributs de l'échange
            $echange->date = $request->input('date');
            $echange->heure = $request->input('heure');
            $echange->contenu = $request->input('contenu');
            $echange->type = $request->input('type');
            
            // Sauvegarder les modifications
            $echange->save();
            
            // Charger les informations du prospect correspondant à l'échange
            $prospect = Prospect::findOrFail($echange->prospect_id);
            
            // Retourner une vue avec un message de succès et les variables $echange et $prospect
            return view('echanges.updateconfirmation')->with('success', 'Echange modifié avec succès!')->with('echange', $echange)->with('prospect', $prospect);
        } catch (ModelNotFoundException $e) {
            // Retourner une vue avec un message d'erreur si l'échange n'existe pas
            return back()->with('error', 'Echange non trouvé');
        }
    }

    public function delete($id) {
        $echange = Echange::findOrFail($id);
        $echange->delete();
    
        return view('echanges.deleteconfirmation')->with('message', 'L\'échange a bien été supprimé.');

     }
}

@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div>
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone">
        </div>

        <div>
            <label for="adresse">Adresse postale de facture :</label>
            <input type="text" id="adresse" name="adresse">
        </div>

        <div>
            <label for="delai_paiement">Délai de paiement en jours :</label>
            <input type="number" id="delai_paiement" name="delai_paiement" value="30">
        </div>

        <button type="submit">Créer le client</button>
    </form>
@endsection

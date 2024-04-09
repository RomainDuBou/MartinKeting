@extends('layouts.app')

@section('content')
    <h1>Modifier le client</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $client->nom) }}" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $client->prenom) }}" required>
        </div>

        <div>
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" value="{{ old('email', $client->email) }}" required>
        </div>

        <div>
            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone" value="{{ old('telephone', $client->telephone) }}">
        </div>

        <div>
            <label for="adresse">Adresse postale de facture :</label>
            <input type="text" id="adresse" name="adresse" value="{{ old('adresse', $client->adresse) }}">
        </div>

        <div>
            <label for="delai_paiement">Délai de paiement en jours :</label>
            <input type="number" id="delai_paiement" name="delai_paiement" value="{{ old('delai_paiement', $client->delai_paiement) }}" required>
        </div>

        <button type="submit">Modifier le client</button>
    </form>
@endsection

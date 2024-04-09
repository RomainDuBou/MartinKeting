@extends('layouts.app')

@section('content')
    <h1>Modifier le prospect</h1>

    <form action="{{ route('prospects.update', $prospect->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ $prospect->nom }}" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="{{ $prospect->prenom }}" required>
        </div>

        <div>
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" value="{{ $prospect->email }}" required>
        </div>

        <div>
            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone" value="{{ $prospect->telephone }}">
        </div>

        <div>
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" value="{{ $prospect->date_naissance }}">
        </div>

        <div>
            <label for="besoin_exprime">Besoin exprimé :</label>
            <textarea id="besoin_exprime" name="besoin_exprime">{{ $prospect->besoin_exprime }}</textarea>
        </div>

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection

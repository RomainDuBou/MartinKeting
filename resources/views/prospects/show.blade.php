@extends('layouts.app')

@section('content')
    <h1>Détails du prospect</h1>

    <ul>
        <li><strong>Nom :</strong> {{ $prospect->nom }}</li>
        <li><strong>Prénom :</strong> {{ $prospect->prenom }}</li>
        <li><strong>Adresse Email :</strong> {{ $prospect->email }}</li>
        <li><strong>Numéro de Téléphone :</strong> {{ $prospect->telephone }}</li>
        <li><strong>Date de Naissance :</strong> {{ $prospect->date_naissance }}</li>
        <li><strong>Besoin Exprimé :</strong> {{ $prospect->besoin_exprime }}</li>
        <!-- Ajoutez d'autres informations si nécessaire -->
    </ul>

    <a href="{{ route('prospects.index') }}">Retour à la liste des prospects</a>
@endsection

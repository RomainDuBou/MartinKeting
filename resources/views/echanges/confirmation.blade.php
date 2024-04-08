@extends('layouts.app')

@section('title', 'Echange confirmation')

@section('content')
    <div class="confirmationContainer">
        <p>{{$success}}</p>
        <h2>Récapitulatif de l'échange</h2>

        <p><strong>ID de l'échange:</strong> {{ $echange->id }}</p>
        <p><strong>Date:</strong> {{ $echange->date }}</p>
        <p><strong>Heure:</strong> {{ $echange->heure }}</p>
        <p><strong>Contenu:</strong> {{ $echange->contenu }}</p>
        <p><strong>Type:</strong> {{ $echange->type }}</p>

        <h3>Informations du prospect</h3>
        <p><strong>ID du prospect:</strong> {{ $echange->prospect_id }}</p>
        <p><strong>Nom:</strong> {{ $echange->prospect->nom }}</p>
        <p><strong>Prénom:</strong> {{ $echange->prospect->prenom }}</p>
    </div>
@endSection

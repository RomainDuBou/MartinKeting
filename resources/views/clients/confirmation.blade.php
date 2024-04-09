@extends('layouts.app')

@section('title', 'Client confirmation')

@section('content')
    <div class="confirmationContainer">
        <p>{{$message}}</p>
        <h2>Le prospect a bien été converti en tant que client 🎉</h2>

        <p><strong>ID du prospect:</strong> {{ $prospect->id }}</p>
        <p><strong>ID du client:</strong> {{ $client->id }}</p>
        <p><strong>Email : </strong>{{ $client->email}}</p>
        <p><strong>Téléphone : </strong>{{ $client->telephone}}</p>
        <p><strong>Date de naissance : </strong>{{ $client->date_naissance}}</p>
        <p><strong>Besoin : </strong>{{ $client->besoin}}</p>
        <p><strong>Adresse postale : </strong>{{ $client->adresse_postale}}</p>
        <p><strong>Délai paiement en jour : </strong>{{ $client->delai_paiement_jour}}</p>
    </div>
@endSection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de la vente</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Titre: {{ $vente->titre }}</h5>
                <p class="card-text">Description: {{ $vente->description }}</p>
                <p class="card-text">Date: {{ $vente->date }}</p>
                <p class="card-text">Montant HT: {{ $vente->montant_ht }}</p>
                <p class="card-text">TVA: {{ $vente->tva }}</p>
                <p class="card-text">Client: {{ $vente->client->nom }} {{ $vente->client->prenom }}</p>
            </div>
        </div>

        <a href="{{ route('ventes.index') }}" class="btn btn-primary mt-3">Retour à la liste des ventes</a>
    </div>
@endsection

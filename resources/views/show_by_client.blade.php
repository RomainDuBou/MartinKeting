@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du client</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nom: {{ $client->nom }} {{ $client->prenom }}</h5>
                <p class="card-text">Email: {{ $client->email }}</p>
                <p class="card-text">Téléphone: {{ $client->telephone }}</p>
                <p class="card-text">Adresse: {{ $client->adresse }}</p>
                <p class="card-text">Délai de paiement: {{ $client->delai_paiement }} jours</p>
            </div>
        </div>

        <h2>Ventes associées à ce client</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Montant HT</th>
                    <th>TVA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventes as $vente)
                    <tr>
                        <td>{{ $vente->titre }}</td>
                        <td>{{ $vente->description }}</td>
                        <td>{{ $vente->date }}</td>
                        <td>{{ $vente->montant_ht }}</td>
                        <td>{{ $vente->tva }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

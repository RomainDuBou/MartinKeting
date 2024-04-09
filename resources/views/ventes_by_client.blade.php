@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ventes du client {{ $client->nom }} {{ $client->prenom }}</h1>

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

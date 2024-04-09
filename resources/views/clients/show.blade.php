@extends('layouts.app')

@section('content')
    <h1>Détails du client</h1>

    <table>
        <tr>
            <th>Nom</th>
            <td>{{ $client->nom }}</td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td>{{ $client->prenom }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th>Numéro de téléphone</th>
            <td>{{ $client->telephone }}</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>{{ $client->adresse }}</td>
        </tr>
        <tr>
            <th>Délai de paiement (jours)</th>
            <td>{{ $client->delai_paiement }}</td>
        </tr>
    </table>

    <a href="{{ route('clients.index') }}">Retour à la liste des clients</a>
@endsection
<h1>Détails du client</h1>

<table>
    <tr>
        <th>Nom</th>
        <td>{{ $client->nom }}</td>
    </tr>
    <tr>
        <th>Prénom</th>
        <td>{{ $client->prenom }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $client->email }}</td>
    </tr>
    <!-- Altri dettagli del cliente -->
</table>

<a href="{{ route('clients.index') }}">Retour à la liste des clients</a>

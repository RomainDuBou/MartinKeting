@extends('layouts.app')

@section('title', 'Prospects')

@section('content')
    <section class="prospectSection">
        <div class="titreLink">
            <h1>Liste des clients</h1>
            <a href="{{ route('prospects.create') }}">
                <button type="submit" class="formbold-btn">Ajouter une vente à un client</button>
            </a>
        </div>
        <div class="prospectContainer">
            <table>
                <tr>
                    <th>ID client</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de naissance</th>
                    <th>Adresse postale</th>
                    <th>Délai de paiement en jour</th>
                    <th>Actions</th>
                </tr>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->date_naissance }}</td>
                        <td>{{ $client->adresse_postale }}</td>
                        <td>{{ $client->delai_paiement_jour }}</td>
                        <td>
                            <form method="POST" action="{{route('clients.delete', ['id' => $client->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">supprimer</button>
                        </td>
                        </form>
                    </tr>
                @endforeach
                </table>
        </div>
    </section>
@endsection

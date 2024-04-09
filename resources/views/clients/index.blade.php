@extends('layouts.app')

@section('content')
    <h1>Liste des clients</h1>

    @if ($clients->isEmpty())
        <p>Aucun client trouvé.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Délai de paiement (jours)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->delai_paiement }}</td>
                        <td>
                            <a href="{{ route('clients.show', $client->id) }}">Voir</a>
                            <a href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('clients.create') }}">Ajouter un nouveau client</a>
@endsection

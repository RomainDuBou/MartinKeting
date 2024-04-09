@extends('layouts.app')

@section('content')
    <h1>Liste des prospects</h1>

    @if ($prospects->isEmpty())
        <p>Aucun prospect n'est disponible pour le moment.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de Naissance</th>
                    <th>Besoin Exprimé</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prospects as $prospect)
                    <tr>
                        <td>{{ $prospect->nom }}</td>
                        <td>{{ $prospect->prenom }}</td>
                        <td>{{ $prospect->email }}</td>
                        <td>{{ $prospect->telephone }}</td>
                        <td>{{ $prospect->date_naissance }}</td>
                        <td>{{ $prospect->besoin_exprime }}</td>
                        <td>
                            <a href="{{ route('prospects.show', $prospect->id) }}">Voir</a>
                            <a href="{{ route('prospects.edit', $prospect->id) }}">Modifier</a>
                            <form action="{{ route('prospects.destroy', $prospect->id) }}" method="POST">
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

    <a href="{{ route('prospects.create') }}">Ajouter un prospect</a>
@endsection

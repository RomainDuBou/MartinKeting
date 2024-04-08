@extends('layouts.app')

@section('title', 'Prospects')

@section('content')
    <section class="prospectSection">
        <div class="titreLink">
            <h1>Liste des prospects</h1>
            <a href="{{ route('prospects.create') }}">
                <button type="submit" class="formbold-btn">Ajouter un prospect</button>
            </a>
            <a href="{{ route('echanges.index') }}">
                <button type="submit" class="formbold-btn">Voir les échanges</button>
            </a>
        </div>
        <div class="prospectContainer">
            <table>
                <tr>
                    <th>ID prospect</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
                @foreach ($prospects as $prospect)
                    <tr>
                        <td>{{ $prospect->id }}</td>
                        <td>{{ $prospect->prenom }}</td>
                        <td>{{ $prospect->nom }}</td>
                        <td>{{ $prospect->email }}</td>
                        <td>{{ $prospect->telephone }}</td>
                        <td>{{ $prospect->date_naissance }}</td>
                        <td>
                            <a href="{{ route('prospects.show', ['id' => $prospect->id]) }}">Voir plus</a>
                            <form method="POST" action="{{ route('prospects.delete', ['id' => $prospect->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="formButton" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection

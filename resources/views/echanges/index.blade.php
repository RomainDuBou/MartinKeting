@extends('layouts.app')

@section('title', 'Prospects')

@section('content')

<section class="prospectSection">
    <div class="titreLink">
        <h1>Tableau des échanges avec les prospects</h1>
        <a href="{{ route('echanges.create') }}">
            <button type="submit" class="formbold-btn">Créer un échange</button>
        </a>
        <a href="{{ route('prospects.index') }}">
            <button type="submit" class="formbold-btn">Voir les prospects</button>
        </a>
    </div>
    <div class="prospectContainer">
    <table>
            <tr>
                <th>Echange avec le prospect</th>
                <th>ID de l'échange</th>
                <th>Type d'échange</th>
                <th>Date de l'échange</th>
                <th>Heure de l'échange</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
            @foreach ($echanges as $echange)
            <tr>
                <td>Echange avec le prospect n°{{ $echange->prospect->id }} ({{ $echange->prospect->prenom }} {{ $echange->prospect->nom }})</td>
                <td>#{{ $echange->id }}</td>
                <td>{{ $echange->type }}</td>
                <td>{{ $echange->date }}</td>
                <td>{{ $echange->heure }}</td>
                <td>{{ $echange->contenu }}</td>
                <td>
                    <a href="{{ route('echanges.edit', ['id' => $echange->id]) }}">Modifier</a>
                    <form method="POST" action="{{ route('echanges.delete', ['id' => $echange->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="formButton" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
</section>

@endsection
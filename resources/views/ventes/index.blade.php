@extends('layouts.app')

@section('title', 'Prospects')

@section('ventes-active', 'active')


@section('content')

<section class="prospectSection">
    <div class="titreLink">
        <h1>TABLEAU DES VENTES</h1>
        <a href="{{ route('ventes.create') }}">
            <button type="submit" class="formbold-btn">Créer une vente</button>
        </a>
        <a href="{{ route('clients.index') }}">
            <button type="submit" class="formbold-btn">Voir les clients</button>
        </a>
    </div>
    <div class="prospectContainer">
    <table>
            <tr>
                <th>Ventes</th>
                <th>ID de la vente</th>
                <th>Titre</th>
                <th>Date de la vente</th>
                <th>Montant HT</th>
                <th>TVA</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            @foreach ($ventes as $vente)
            <tr>
                <td>Vente attribué au client n°{{ $vente->client->id }} <strong>({{ $vente->client->prenom }} {{ $vente->client->nom }})</strong></td>
                <td>#{{ $vente->id }}</td>
                <td>{{ $vente->titre }}</td>
                <td>{{ $vente->date }}</td>
                <td>{{ $vente->montant_HT}}</td>
                <td>{{ $vente->TVA }}</td>
                <td>{{ $vente->description }}</td>
                <td>
                    <a href="{{ route('ventes.edit', ['id' => $vente->id]) }}">Modifier</a>
                    {{-- <form method="POST" action="{{ route('echanges.delete', ['id' => $echange->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="formButton" type="submit">Supprimer</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
    </table>
</section>

@endsection
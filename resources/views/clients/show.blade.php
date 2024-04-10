@extends('layouts.app')

@section('title', 'Détails')

@section('clients-active', 'active')


@section('nav')

@section('content')
    <div class="detailProspectContainer">
        <h1>Détails du Client n°{{ $client->id }}</h1>
        <h1> {{ $client->prenom }} {{ $client->nom }}</h1>

        <h2><u>Coordonnées et informations supplémentaires :</u></h2>
        <p><strong>Adresse mail :</strong> {{ $client->email }}</p>
        <p><strong>Téléphone :</strong> {{ $client->telephone }}</p>
        <p><strong>Date de naissance :</strong> {{ $client->date_naissance }}</p>
        <p><strong> Date de création :</strong> {{ $client->created_at }}</p>
        <p><strong> Date de mise à jour :</strong> {{ $client->updated_at }}</p>
        <div class="prospectLinks">
            <a class="formbold-btn" href="{{ route('ventes.show', ['id' => $client->id]) }}">Voir les ventes</a>
            {{-- <a class="formbold-btn" href="{{ route('ventes.show', ['id' => $client->id]) }}">Voir les ventes</a> --}}
            <a class="formbold-btn" href="{{ route('clients.edit', ['id' => $client->id]) }}">Modifier</a>
            <form method="POST" action="{{ route('clients.delete', ['id' => $client->id]) }}">
                @csrf
                @method('DELETE')
                <button class="formbold-btn" type="submit">Supprimer</button>
            </form>
        </div>
    </div>
@endsection

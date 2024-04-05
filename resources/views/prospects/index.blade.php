@extends('layouts.app')

@section('title', 'Prospects')

@section('content')

    <section class="prospectContainer">
        @foreach ($prospects as $prospect)
            <div class="prospects">
                <h2>Prospect n°{{ $prospect->id }}</h1>
                    <h2>{{ $prospect->prenom }} {{ $prospect->nom }} </h2>
                    <p><strong>Adresse email</strong> : {{ $prospect->email }}</p>
                    <p><strong>Téléphone</strong> : {{ $prospect->telephone }}</p>
                    <p><strong>Date de naissance</strong> : {{ $prospect->date_naissance }}</p>
                    <div class="linksContact">
                        <a href="{{ route('prospects.show', ['id' => $prospect->id]) }}">Voir plus</a>
                        <a href="{{ route('prospects.edit', ['id' => $prospect->id]) }}">Modifier</a>
                        <form method="POST" action="{{ route('prospects.delete', ['id' => $prospect->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="formButton" type="submit">Supprimer</button>
                        </form>
                    </div>

            </div>
        @endforeach

        <a href="{{ route('prospects.create') }}">
            <button type="submit" class="btn">Ajouter un prospect</button>
        </a>
    </section>

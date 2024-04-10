@extends('layouts.app')

@section('title', 'Détails du Prospect')

@section('content')
    <div class="detailEchangeContainer">
        <div class="detailEchange">
            <h1>Détails du Prospect : </h1>
            <h2> {{ $prospect->nom }} {{ $prospect->prenom }}</h2>
            <div>
                <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/new-post.png" alt="new-post" />
                <p> {{ $prospect->email }}</p>
            </div>
            <div>
                <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/phone.png" alt="phone" />
                <p>{{ $prospect->telephone }}</p>
            </div>
            <div class="echanges">
                <h2>Échanges avec le Prospect : </h2>
                @if ($echanges->isEmpty())
                    <p class="empty">Aucun échange trouvé pour ce prospect.</p>
                @else
                    @foreach ($echanges as $echange)
                        <div class="echangeContainer">
                            <p><strong>ID de l'échange:</strong> {{ $echange->id }}</p>
                            <p><strong>Date de l'échange:</strong> {{ $echange->date }}</p>
                            <p><strong>Heure de l'échange:</strong> {{ $echange->heure }}</p>
                            <p><strong>Type d'échange:</strong> {{ $echange->type }}</p>
                            <p><strong>Contenu:</strong> {{ $echange->contenu }}</p>
                            <div class="echangeLinks">
                                <a class="formbold-btn2" href="{{ route('echanges.edit', ['id' => $echange->id]) }}">Modifier</a>
                                <form method="POST" action="{{ route('echanges.delete', ['id' => $echange->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btnStyle" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="links">
                <a class="formbold-btn" href="{{ route('prospects.show', ['id' => $prospect->id]) }}">Retour à la fiche du
                    prospect</a>
                <a class="formbold-btn" href="{{ route('echanges.create', ['id' => $prospect->id]) }}">Créer un nouvel
                    échange</a>
                <a class="formbold-btn" href="{{ route('echanges.index') }}">Voir le tableau des échanges</a>
            </div>
        </div>



    @endsection

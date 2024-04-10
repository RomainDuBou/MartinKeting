@extends('layouts.app')

@section('title', 'Détails du Prospect')

@section('ventes-active', 'active')


@section('content')
    <div class="detailEchangeContainer">
        <div class="detailEchange">
            <h1>Détails du Client : </h1>
            <h2> {{ $client->nom }} {{ $client->prenom }}</h2>
            <div>
                <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/new-post.png" alt="new-post" />
                <p> {{ $client->email }}</p>
            </div>
            <div>
                <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/phone.png" alt="phone" />
                <p>{{ $client->telephone }}</p>
            </div>
            <div class="echanges">
                <h2>Vente(s) attribuée(s) au Prospect : </h2>
                @if ($ventes->isEmpty())
                    <p class="empty">Aucun échange trouvé pour ce prospect.</p>
                @else
                    @foreach ($ventes as $vente)
                        <div class="echangeContainer">
                            <p><strong>ID de la vente:</strong> {{ $vente->id }}</p>
                            <p><strong>Date de la vente:</strong> {{ $vente->date }}</p>
                            <p><strong>Montant HT :</strong> {{ $vente->montant_HT }}</p>
                            <p><strong>TVA :</strong> {{ $vente->TVA }}</p>
                            <p><strong>Description :</strong> {{ $vente->description }}</p>
                            <div class="echangeLinks">
                                <a class="formbold-btn2" href="{{ route('ventes.edit', ['id' => $vente->id]) }}">Modifier</a>
                                {{-- <form method="POST" action="{{ route('ventes.delete', ['id' => $echange->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btnStyle" type="submit">Supprimer</button>
                                </form> --}}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="links">
                <a class="formbold-btn" href="{{ route('clients.show', ['id' => $client->id]) }}">Retour à la fiche du
                    client</a>
                <a class="formbold-btn" href="{{ route('ventes.create', ['id' => $client->id]) }}">Créer une nouvelle
                    vente</a>
                <a class="formbold-btn" href="{{ route('ventes.index') }}">Voir le tableau des ventes</a>
            </div>
        </div>



    @endsection


@extends('layouts.app')

@section('title', 'Prospect')

@section('clients-active', 'active')


@section('content')
    <div class="formbold-form-wrapper-clients">
        <form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
           
            @method('PUT')

            @csrf
            <h1>Modifier le client n°{{$client->id}}</h1>

            <div class="formbold-input-flex">
                <div>
                    <input type="text" name="prospect_id" value="{{ $client->id }}"  class="formbold-form-input" readonly>
                    <label for="nom" class="formbold-form-label">ID du prospect :</label>
                </div>
                <div>
                    <input type="text" id="nom" name="nom" value="{{ $client->nom }}" 
                        class="formbold-form-input">
                    <label for="nom" class="formbold-form-label">Nom:</label>
                </div>
                <div>
                    <input type="text" id="prenom" name="prenom" value="{{ $client->prenom }}" 
                        class="formbold-form-input">
                    <label for="prenom" class="formbold-form-label">Prénom:</label>
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="email" id="email" name="email" value="{{ $client->email }}" 
                        class="formbold-form-input">
                    <label for="email" class="formbold-form-label">Email:</label>
                </div>
                <div>
                    <input type="text" id="telephone" name="telephone" value="{{ $client->telephone }}" 
                        class="formbold-form-input">
                    <label for="telephone" class="formbold-form-label">Téléphone:</label>
                </div>
                <div>
                    <input type="date" id="date_naissance" name="date_naissance" value="{{ $client->date_naissance }}"
                         class="formbold-form-input">
                    <label for="date_naissance" class="formbold-form-label">Date de naissance:</label>

                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="text" id="adresse_postale" name="adresse_postale" required class="formbold-form-input" value="{{ $client->adresse_postale }}">
                    <label for="adresse_postale" class="formbold-form-label">Adresse postale:</label>
                </div>
                <div>
                    <input type="number" id="delai_paiement" name="delai_paiement_jour" min="0" max="30" required
                        class="formbold-form-input" value="{{ $client->delai_paiement_jour }}">
                    <label for="delai_paiement" class="formbold-form-label">Délai de paiement en jours (maximum 30
                        jours):</label>
                </div>
            </div>
            <button type="submit" class="formbold-btn">Modifier le client</button>
            <a class="formbold-btn" href="{{ route('clients.show', ['id' => $client->id]) }}">Retour à la fiche du
                client</a>
        </form>
      
    </div>
@endsection

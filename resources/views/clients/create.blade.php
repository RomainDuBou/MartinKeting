@extends('layouts.app')

@section('title', 'Prospect')

@section('content')
    <div class="formbold-form-wrapper-clients">
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <h1>Convertir en client</h1>

            <div class="formbold-input-flex">
                <div>
                    <input type="text" name="prospect_id" value="{{ $prospect->id }}" readonly class="formbold-form-input">
                    <label for="nom" class="formbold-form-label">ID du prospect :</label>
                </div>
                <div>
                    <input type="text" id="nom" name="nom" value="{{ $prospect->nom }}" readonly
                        class="formbold-form-input">
                    <label for="nom" class="formbold-form-label">Nom:</label>
                </div>
                <div>
                    <input type="text" id="prenom" name="prenom" value="{{ $prospect->prenom }}" readonly
                        class="formbold-form-input">
                    <label for="prenom" class="formbold-form-label">Prénom:</label>
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="email" id="email" name="email" value="{{ $prospect->email }}" readonly
                        class="formbold-form-input">
                    <label for="email" class="formbold-form-label">Email:</label>
                </div>
                <div>
                    <input type="text" id="telephone" name="telephone" value="{{ $prospect->telephone }}" readonly
                        class="formbold-form-input">
                    <label for="telephone" class="formbold-form-label">Téléphone:</label>
                </div>
                <div>
                    <input type="date" id="date_naissance" name="date_naissance" value="{{ $prospect->date_naissance }}"
                        readonly class="formbold-form-input">
                    <label for="date_naissance" class="formbold-form-label">Date de naissance:</label>

                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="text" id="adresse_postale" name="adresse_postale" required class="formbold-form-input">
                    <label for="adresse_postale" class="formbold-form-label">Adresse postale:</label>
                </div>
                <div>
                    <input type="number" id="delai_paiement" name="delai_paiement_jour" min="0" max="30" required
                        class="formbold-form-input">
                    <label for="delai_paiement" class="formbold-form-label">Délai de paiement en jours (maximum 30
                        jours):</label>
                </div>
            </div>
            <input type="hidden" name="prospect_id" value="{{ $prospect->id }}">
            <button type="submit" class="formbold-btn">Créer le client</button>
        </form>
    </div>
@endsection

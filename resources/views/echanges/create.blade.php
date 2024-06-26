@extends('layouts.app')

@section('title', 'Echanges')

@section('content')
    <div class="formbold-form-wrapper">

        <form action="{{ route('echanges.store') }}" method="post">
            @csrf
            <h1>Créer un échange</h1>

            <div class="formbold-input-flex">
                <div>
                    <select name="prospect_id" id="prospect_id" class="formbold-form-input" required>
                        @foreach ($prospects as $prospect)
                            <option value="{{ $prospect->id }}">{{ $prospect->nom }} {{ $prospect->prenom }}</option>
                        @endforeach
                    </select>
                    <label for="prospect_id" class="formbold-form-label">Prospect:</label>
                </div>
                <div>
                    <select name="type" id="type" class="formbold-form-input" required>
                        <option value="telephone">Téléphone</option>
                        <option value="email">Email</option>
                        <option value="echange_direct">Échange direct</option>
                        <option value="courrier">Courrier</option>
                    </select>
                    <label for="type" class="formbold-form-label">Type:</label>
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <input class="formbold-form-input" type="date" name="date" id="date" required>
                    <label for="date" class="formbold-form-label">Date:</label>
                </div>
                <div>
                    <input class="formbold-form-input" type="time" name="heure" id="heure" required>
                    <label for="heure" class="formbold-form-label">Heure:</label>
                </div>
            </div>

            <div class="formbold-textarea">
                <div>
                    <label for="contenu" class="formbold-form-label">Contenu:</label>
                    <textarea class="formbold-form-input" name="contenu" id="contenu" required></textarea>
                </div>
            </div>

            <div class="linksEchanges">
                <button class="echangeButton" type="submit">Enregistrer l'échange</button>
                <button><a href="{{ route('echanges.index') }}">Voir tous les échanges</a></button>
            </div>
        </form>
    </div>

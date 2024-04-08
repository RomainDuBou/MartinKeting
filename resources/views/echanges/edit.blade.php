@extends('layouts.app')

@section('title', 'Echanges')

@section('content')
    <div class="formbold-form-wrapper">

        <form action="{{ route('echanges.update', ['id' => $echange->id]) }}" method="post">
            @method('PUT')
            @csrf
            <h1>Modifier l'échange n°{{ $echange->id }}</h1>

            <div class="formbold-input-flex">
                <div>
                    <select name="type" id="type" class="formbold-form-input" value="{{$echange->type}}" required>
                        <option value="telephone">Téléphone</option>
                        <option value="email">Email</option>
                        <option value="echange_direct">Échange direct</option>
                        <option value="courrier">Courrier</option>
                    </select>
                    <label for="type" class="formbold-form-label">Type:</label>
                </div>
                <div>
                    <input class="formbold-form-input" type="date" name="date" id="date" value="{{$echange->date}}" required>
                    <label for="date" class="formbold-form-label">Date:</label>
                </div>
                <div>
                    <input class="formbold-form-input" type="time" name="heure" id="heure" value="{{$echange->time}}" required>
                    <label for="heure" class="formbold-form-label">Heure:</label>
                </div>
            </div>

            <div class="formbold-textarea">
                <div>
                    <label for="contenu" class="formbold-form-label">Contenu:</label>
                    <textarea class="formbold-form-input" name="contenu" id="contenu" required>{{$echange->contenu}}</textarea>
                </div>
            </div>

            <div class="linksEchanges">
                <button class="echangeButton" type="submit">Enregistrer la modification </button>
                <button><a href="{{ route('echanges.index') }}">Voir tous les échanges</a></button>
            </div>
        </form>
    </div>

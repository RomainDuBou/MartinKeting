@extends('layouts.app')

@section('title', 'Echanges')

@section('ventes-active', 'active')


@section('content')
    <div class="formbold-form-wrapper">

        <form action="{{ route('ventes.update', ['id' => $vente->id]) }}" method="post">
            @method('PUT')
            @csrf
            <h1>Modifier la vente n°{{ $vente->id }}</h1>

            <div class="formbold-input-flex">
                <div>
                    <select id="client_id" name="client_id" required class="formbold-form-input" readonly>
                            <option value="{{ $client->id }}">  {{ $client->prenom }} {{ $client->nom }}</option>
                    </select>
                    <label for="client_id" class="formbold-form-label">Client :</label>

                    @if ($errors->has('client_id'))
                    <p>{{ $errors->first('client_id') }}</p>
                @endif
                </div>
                <div>
                    <input type="text" id="titre" name="titre" required class="formbold-form-input" value="{{$vente->titre}}">
                    <label for="titre" class="formbold-form-label">Titre :</label>

                    @if ($errors->has('titre'))
                    <p>{{ $errors->first('titre') }}</p>
                @endif
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="date" id="date" name="date" required class="formbold-form-input" value="{{$vente->date}}">
                    <label for="date" class="formbold-form-label">Date :</label>

                    @if ($errors->has('date'))
                    <p>{{ $errors->first('date') }}</p>
                @endif
                </div>
                <div>
                    <input type="number" id="montant_HT" name="montant_HT" step="0.01" required
                        class="formbold-form-input" value="{{$vente->montant_HT}}">
                        <label for="montant_HT" class="formbold-form-label">Montant HT :</label>


                        @if ($errors->has('montant_HT'))
                        <p>{{ $errors->first('montant_HT') }}</p>
                    @endif
                </div>
                <div>
                    <input type="number" id="tva" name="TVA" step="0.01" required class="formbold-form-input" value='{{$vente->TVA}}'>
                    <label for="TVA" class="formbold-form-label">TVA :</label>

                    @if ($errors->has('TVA'))
                    <p>{{ $errors->first('TVA') }}</p>
                @endif
                </div>
            </div>
            <div class="formbold-textarea">
                <div>
                    <label for="description" class="formbold-form-label">Description :</label>
                    <textarea id="description" class="formbold-form-input"  name="description" required>{{$vente->description}}
                    </textarea>
                </div>
            </div>
            <div class="linksEchanges">
                <button class="echangeButton" type="submit">Enregistrer la modification </button>
                <button><a href="{{ route('ventes.index') }}">Voir toutes les ventes</a></button>
            </div>
        </form>
    </div>

@extends('layouts.app')

@section('title', 'Contact')

@section('nav')

@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="{{ route('prospect.store') }}" method="POST">
                @csrf
                <div class="thirteen">
                    <h1>Ajouter un prospect</h1>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="nom" class="formbold-form-label"><strong>Nom du prospect :</strong></label>
                        <input type="text" name="nom" id="nom" class="formbold-form-input"
                            value="{{ old('nom') }}">
                        @if ($errors->has('nom'))
                            <p>{{ $errors->first('nom') }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="prenom" class="formbold-form-label"><strong>Prénom du prospect :</strong></label>
                        <input type="text" name="prenom" id="prenom" class="formbold-form-input"
                            value="{{ old('prenom') }}">
                        @if ($errors->has('prenom'))
                            <p>{{ $errors->first('prenom') }}</p>
                        @endif
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="email" class="formbold-form-label"><strong>Email du prospect :</strong></label>
                        <input type="email" name="nom" id="nom" class="formbold-form-input"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="telephone" class="formbold-form-label"><strong>Téléphone du prospect :</strong></label>
                        <input type="tel" name="telephone" id="telephone" class="formbold-form-input"
                            value="{{ old('telephone') }}">
                        @if ($errors->has('telephone'))
                            <p>{{ $errors->first('telephone') }}</p>
                        @endif
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="besoin" class="formbold-form-label"><strong>Besoin cliant:</strong></label>
                        <textarea id="besoin" name="besoin" rows="6" placeholder="Type your message" class="formbold-form-input">
                            {{ old('besoin') }}
                        </textarea>
                        value="{{ old('besoin') }}">
                        @if ($errors->has('besoin'))
                            <p>{{ $errors->first('besoin') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="date" class="formbold-form-label"><strong>Date de naissance :</strong></label>
                        <input type="date" name="date" id="date" class="formbold-form-input"
                            value="{{ old('date') }}">
                        @if ($errors->has('date_naissance'))
                            <p>{{ $errors->first('besoin') }}</p>
                        @endif
                    </div>
                </div>

                <input type="submit" value="Publier" class="formbold-btn">
            </form>
        </div>
    </div>
@endsection
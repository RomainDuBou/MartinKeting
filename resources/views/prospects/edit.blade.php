@extends('layouts.app')

@section('title', 'Prospect')

@section('prospects-active', 'active')


@section('content')
        <div class="formbold-form-wrapper">
            <form action="{{ route('prospects.update', ['id' => $prospect->id]) }}" method="POST">

                @method('PUT')
                @csrf
                <h1>Modifier le prospect n°{{$prospect->id}}</h1>

                <div class="formbold-input-flex">
                    <div>
                        <input type="text" class="formbold-form-input" name="nom" id="nom"
                            value="{{$prospect->nom}}">
                        <label for="nom" class="formbold-form-label"><strong>Nom du prospect :</strong></label>

                        @if ($errors->has('nom'))
                            <p>{{ $errors->first('nom') }}</p>
                        @endif
                    </div>
                    <div>
                        <input type="text" class="formbold-form-input" name="prenom" id="prenom"
                            value="{{$prospect->prenom}}">
                        <label for="prenom" class="formbold-form-label"><strong>Prénom du prospect :</strong></label>

                        @if ($errors->has('prenom'))
                            <p>{{ $errors->first('prenom') }}</p>
                        @endif
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <input type="email" class="formbold-form-input" name="email" id="email"
                            value="{{$prospect->email}}">
                        <label for="email" class="formbold-form-label"><strong>Email du prospect :</strong></label>

                        @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div>
                        <input type="tel" class="formbold-form-input" name="telephone" id="telephone"
                            value="{{$prospect->telephone}}">
                        <label for="telephone" class="formbold-form-label"><strong>Téléphone du prospect :</strong></label>

                        @if ($errors->has('telephone'))
                            <p>{{ $errors->first('telephone') }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <label for="date_naissance" class="formbold-form-label"><strong>Date de naissance :</strong></label>
                    <input type="date" class="formbold-form-input" name="date_naissance" id="date_naissance"
                        value="{{$prospect->date_naissance}}">
                    @if ($errors->has('date_naissance'))
                        <p>{{ $errors->first('date_naissance') }}</p>
                    @endif
                </div>
                <div class="formbold-textarea">
                    <textarea id="besoin" class="formbold-form-input" placeholder="Write your message..." name="besoin" rows="6">
                            {{$prospect->besoin}}
                        </textarea>
                    <label for="besoin" class="formbold-form-label"><strong>Besoin du client:</strong></label>

                    @if ($errors->has('besoin'))
                        <p>{{ $errors->first('besoin') }}</p>
                    @endif
                </div>
                <input type="submit" class="formbold-btn" value="Modifier le prospect">
            </form>
        </div>
@endsection

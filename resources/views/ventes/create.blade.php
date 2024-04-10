@extends('layouts.app')

@section('ventes-active', 'active')


@section('content')
    <div class="formbold-form-wrapper-clients">

        <form action="{{ route('ventes.store') }}" method="POST">
            <h1>Créer une nouvelle vente</h1>
            @csrf
            <div class="formbold-input-flex">
                <div>
                    <select id="client_id" name="client_id" required class="formbold-form-input">
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->nom }}</option>
                        @endforeach
                    </select>
                    <label for="client_id" class="formbold-form-label">Client :</label>

                    @if ($errors->has('client_id'))
                    <p>{{ $errors->first('client_id') }}</p>
                @endif
                </div>
                <div>
                    <input type="text" id="titre" name="titre" required class="formbold-form-input" value="{{old('titre')}}">
                    <label for="titre" class="formbold-form-label">Titre :</label>

                    @if ($errors->has('titre'))
                    <p>{{ $errors->first('titre') }}</p>
                @endif
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <input type="date" id="date" name="date" required class="formbold-form-input" value="{{old('date')}}">
                    <label for="date" class="formbold-form-label">Date :</label>

                    @if ($errors->has('date'))
                    <p>{{ $errors->first('date') }}</p>
                @endif
                </div>
                <div>
                    <input type="number" id="montant_ht" name="montant_ht" step="0.01" required
                        class="formbold-form-input" value="{{old('montant_ht')}}">
                        <label for="montant_ht" class="formbold-form-label">Montant HT :</label>


                        @if ($errors->has('montant_ht'))
                        <p>{{ $errors->first('montant_ht') }}</p>
                    @endif
                </div>
                <div>
                    <input type="number" id="tva" name="TVA" step="0.01" required class="formbold-form-input" value='{{old('TVA')}}'>
                    <label for="TVA" class="formbold-form-label">TVA :</label>

                    @if ($errors->has('TVA'))
                    <p>{{ $errors->first('TVA') }}</p>
                @endif
                </div>
            </div>
            <div class="formbold-textarea">
                <div>
                    <label for="description" class="formbold-form-label">Description :</label>
                    <textarea id="description" class="formbold-form-input"  name="description" required>{{old('description')}}
                    </textarea>
                </div>
            </div>
            <button type="submit">Créer la vente</button>
        </form>
    </div>
@endsection

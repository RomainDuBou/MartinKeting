@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'échange</h1>

        <form action="{{ route('echanges.update', $echange->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" value="{{ $echange->date }}" required>
            </div>

            <div class="form-group">
                <label for="heure">Heure:</label>
                <input type="time" name="heure" class="form-control" value="{{ $echange->heure }}" required>
            </div>

            <div class="form-group">
                <label for="type_communication">Type de communication:</label>
                <select name="type_communication" class="form-control" required>
                    <option value="téléphone" @if($echange->type_communication == 'téléphone') selected @endif>Téléphone</option>
                    <option value="email" @if($echange->type_communication == 'email') selected @endif>Email</option>
                    <option value="échange direct" @if($echange->type_communication == 'échange direct') selected @endif>Échange direct</option>
                    <option value="courrier" @if($echange->type_communication == 'courrier') selected @endif>Courrier</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contenu">Contenu:</label>
                <textarea name="contenu" class="form-control" required>{{ $echange->contenu }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modifier l'échange</button>
        </form>
    </div>
@endsection

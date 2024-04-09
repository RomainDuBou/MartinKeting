@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un nouvel échange</h1>

        <form action="{{ route('echanges.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="heure">Heure:</label>
                <input type="time" name="heure" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="type_communication">Type de communication:</label>
                <select name="type_communication" class="form-control" required>
                    <option value="téléphone">Téléphone</option>
                    <option value="email">Email</option>
                    <option value="échange direct">Échange direct</option>
                    <option value="courrier">Courrier</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contenu">Contenu:</label>
                <textarea name="contenu" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Créer l'échange</button>
        </form>
    </div>
@endsection

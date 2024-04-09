@extends('layouts.app')

@section('content')
    <h1>Créer une nouvelle vente</h1>

    <form action="{{ route('ventes.store') }}" method="POST">
        @csrf

        <div>
            <label for="client_id">Cliente :</label>
            <select id="client_id" name="client_id" required>
                <option value="">choisire un cliant</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                @endforeach
            </select>
        </div>
        
       <div>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div>
            <label for="montant_ht">Montant HT :</label>
            <input type="number" id="montant_ht" name="montant_ht" step="0.01" required>
        </div><br><br>

        <div>
            <label for="tva">TVA :</label>
            <input type="number" id="tva" name="tva" step="0.01" required>
        </div><br><br><br><br>

        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" required>
        </div><br><br><br>

        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>
        </div><br><br><br>




        <button type="submit">Créer la vente</button>
    </form>
@endsection

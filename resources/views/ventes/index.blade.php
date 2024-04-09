@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Ventes</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Montant HT</th>
                    <th>TVA</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventes as $vente)
                    <tr>
                        <td>{{ $vente->titre }}</td>
                        <td>{{ $vente->description }}</td>
                        <td>{{ $vente->date }}</td>
                        <td>{{ $vente->montant_ht }}</td>
                        <td>{{ $vente->tva }}</td>
                        <td>
                            
                            <a href="{{ route('ventes.edit', $vente->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('ventes.destroy', $vente->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette vente?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('ventes.create') }}" class="btn btn-success">Ajouter une Vente</a>
    </div>
@endsection

@extends('layouts.app')

@section('ventes-active', 'active')


@section('title', 'Echange confirmation')

@section('content')
    <div class="confirmationContainer">
        <p>{{$success}}</p>
        <h2>Récapitulatif de la vente</h2>
        
        <p><strong>ID du client :</strong> {{ $vente->client_id }}</p>
        <p><strong>ID de la vente:</strong> {{ $vente->id }}</p>
        <p><strong>Date:</strong> {{ $vente->date }}</p>
        <p><strong>Montant HT :</strong> {{ $vente->montant_ht }}</p>
        <p><strong>TVA :</strong> {{ $vente->TVA }}</p>
        <p><strong>Description:</strong> {{ $vente->description }}</p>
    </div>
@endSection

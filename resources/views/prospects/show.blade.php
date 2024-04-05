@extends('layouts.app')

@section('title', 'Détails')

@section('nav')

@section('content')
<div class="detailContainer">
    <h1>Détails du Prospect n°{{$prospect->id}}</h1>
    <h1> {{$prospect->prenom}}  {{$prospect->nom}}</h1>
    <p><strong>Besoin :</strong> {{ $prospect->besoin}}</p>

    <h2><u>Coordonnées et informations supplémentaires :</u></h2>
    <p><strong>Adresse mail :</strong> {{ $prospect->email }}</p>
    <p><strong>Téléphone :</strong> {{ $prospect->telephone }}</p>
    <p><strong>Date de naissance :</strong> {{ $prospect->date_naissance }}</p>
    <p><strong> Date de création :</strong>  {{ $prospect->created_at }}</p>
    <p><strong> Date de mise à jour :</strong>  {{ $prospect->updated_at }}</p>
        {{-- <div class="linksContact">
        <a href="{{route('contact.edit', ['id' => $contact->id]) }}">Modifier</a>
        </div> --}}
</div>
@endsection
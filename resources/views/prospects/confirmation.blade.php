@extends('layouts.app')

@section('title', 'Prospect confirmation')

@section('content')
    <div class="confirmationContainer">

        <h1>Le prospect <em>{{ $nom }} {{ $prenom }} a bien été enregistré</em></h1>
        <h4>Récapitulatif des informations :</h4>
        <ul>
            <li><strong>Email : </strong>{{ $email}}</li>
            <li><strong>Téléphone : </strong>{{ $telephone}}</li>
            <li><strong>Date de naissance : </strong>{{ $date_naissance}}</li>
            <li><strong>Besoin : </strong>{{ $besoin}}</li>
        </ul>
        <div>
        @endSection

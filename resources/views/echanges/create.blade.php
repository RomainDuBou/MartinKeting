@extends('layouts.app')

@section('title', 'Prospect')

@section('content')

<form action="{{ route('echanges.store') }}" method="post">
    @csrf

    <!-- Champ prospect_id -->
    <label for="prospect_id">Prospect ID:</label>
    <input type="text" name="prospect_id" id="prospect_id" required>

    <!-- Champ date -->
    <label for="date">Date:</label>
    <input type="date" name="date" id="date" required>

    <!-- Champ heure -->
    <label for="heure">Heure:</label>
    <input type="time" name="heure" id="heure" required>

    <!-- Champ contenu -->
    <label for="contenu">Contenu:</label>
    <textarea name="contenu" id="contenu" required></textarea>

    <!-- Champ type -->
    <label for="type">Type:</label>
    <select name="type" id="type" required>
        <option value="telephone">Téléphone</option>
        <option value="email">Email</option>
        <option value="echange_direct">Échange direct</option>
        <option value="courrier">Courrier</option>
    </select>

    <!-- Bouton de soumission -->
    <button type="submit">Enregistrer</button>
</form>
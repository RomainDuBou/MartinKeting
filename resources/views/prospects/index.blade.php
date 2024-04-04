@extends('layouts.app')

@section('title', 'Contacts')

@section('content')

<section class="blogContainer">
@foreach($prospects as $prospect)
<div class="blogs">
    <h3>Prospect n°{{$prospect->id}}</h3>
    <h1><strong>Nom et prénom</strong> : {{$prospect->nom}} {{$prospect->prenom}}</h1>
    <p><strong>Adresse email</strong> : {{$prospect->mail}}</p>
    <p><strong>Téléphone</strong> : {{$prospect->telephone}}</p>
    <p><strong>Date de naissance</strong> : {{$prospect->date_naissance}}</p>
    <p><strong> Date de création</strong> : {{$prospect->created_at}}</p>
    <p><strong> Date de mise à jour</strong> : {{$prospect->updated_at}}</p>
    {{-- <div class="linksContact">  --}}
    {{-- <a href="{{route('blog.show', ['id' => $blog->id]) }}">Voir</a>
    <a href="{{route('blog.edit', ['id' => $blog->id]) }}">Modifier</a>  --}}
    {{-- <form method="POST" action="{{ route('blog.delete', ['id' => $blog->id]) }}">
        @csrf
        @method('DELETE')
        <button class="formButton" type="submit">🗑️</button>
    </form> --}}
    </div> 
   
</div> 
@endforeach
<section>


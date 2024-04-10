@extends('layouts.app')

@section('title', 'Prospects')

@section('prospects-active', 'active')


@section('content')
    <section class="prospectSection">
        <div class="titreLink">
            <h1>LISTE DES PROSPECTS</h1>
            <div class="linksProspect">
            <a href="{{ route('prospects.create') }}" class="formbold-btn">Ajouter un prospect</a>
            <a href="{{ route('echanges.index') }}" class="formbold-btn">Voir les échanges</a>
            </div>
        </div>
         <!-- Barre de recherche -->
       <div class="search-container">
        <input type="text" id="searchInput" placeholder="Rechercher un prospect par son nom, prénom ou e-mail">
    </div>
        <div class="prospectContainer">
            <table>
                <tr>
                    <th>ID prospect</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
                @foreach ($prospects as $prospect)
                    <tr class="prospectRow">
                        <td>{{ $prospect->id }}</td>
                        <td>{{ $prospect->prenom }}</td>
                        <td>{{ $prospect->nom }}</td>
                        <td>{{ $prospect->email }}</td>
                        <td>{{ $prospect->telephone }}</td>
                        <td>{{ $prospect->date_naissance }}</td>
                        <td class="tdLinks">
                            <a href="{{ route('prospects.show', ['id' => $prospect->id]) }}">Voir plus</a>
                            <a href="{{ route('clients.create', ['id' => $prospect->id]) }}">Convertir en client</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

    <script>
        // Fonction pour filtrer les clients
        function filterProspect() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.querySelectorAll(".prospectRow");

            // Parcourir toutes les lignes et masquer celles qui ne correspondent pas à la recherche
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (var j = 1; j < td.length - 1; j++) { // Ignorer la colonne d'action
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        }

        // Détecter les modifications dans le champ de recherche
        document.getElementById("searchInput").addEventListener("keyup", filterProspect);

    </script>
@endsection

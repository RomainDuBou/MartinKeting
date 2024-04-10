@extends('layouts.app')

@section('title', 'Prospects')

@section('clients-active', 'active')


@section('content')
    <section class="prospectSection">
        <div class="titreLink">
            <h1>LISTE DES CLIENTS</h1>
            <a href="{{ route('ventes.create') }}">
                <button type="submit" class="formbold-btn">Ajouter une vente à un client</button>
            </a>
        </div>
       <!-- Barre de recherche -->
       <div class="search-container">
        <input type="text" id="searchInput" placeholder="Rechercher un client par son nom, prénom ou e-mail">
    </div>
        <div class="prospectContainer">
            <table>
                <tr>
                    <th>ID client</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de naissance</th>
                    <th>Adresse postale</th>
                    <th>Délai de paiement en jour</th>
                    <th>Actions</th>
                </tr>
                @foreach ($clients as $client)
                    <tr class="clientRow">
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->date_naissance }}</td>
                        <td>{{ $client->adresse_postale }}</td>
                        <td>{{ $client->delai_paiement_jour }}</td>
                        <td>
                            <a href="{{ route('clients.show', ['id' => $client->id]) }}">Voir plus</a>
                            {{-- <form method="POST" action="{{ route('clients.delete', ['id' => $client->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="formbold-btn2" type="submit">Supprimer</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>


    <script>
        // Fonction pour filtrer les clients
        function filterClients() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.querySelectorAll(".clientRow");

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
        document.getElementById("searchInput").addEventListener("keyup", filterClients);

    </script>
@endsection

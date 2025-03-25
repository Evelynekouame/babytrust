<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="text-center mb-5">
    <h1>La plateforme de garde d'enfants approuvée par tous les parents</h1>
    <p>Bienvenue sur BabyTrust ! Trouvez la nounou ou la crèche idéale.</p>
</div>

<!-- Barre de Recherche -->
<div id="search-bar"></div>

<!-- Profils de Nounous -->
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('images/nanny1.jpg') }}" class="card-img-top" alt="Nounou 1">
            <div class="card-body">
                <h5 class="card-title">Nom de la Nounou</h5>
                <p class="card-text">Description courte...</p>
                <a href="#" class="btn btn-primary">Voir le profil</a>
            </div>
        </div>
    </div>
    <!-- Ajoutez plus de cartes ici -->
</div>
@endsection
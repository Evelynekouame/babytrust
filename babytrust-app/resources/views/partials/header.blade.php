<!-- resources/views/partials/header.blade.php -->
<header class="bg-light py-3">
    <nav class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo BabyTrust" width="100">
        </div>
        <ul class="list-unstyled d-flex gap-3 m-0">
            <li><a href="/" class="text-decoration-none">Baby-sitters</a></li>
            <li><a href="/jobs" class="text-decoration-none">Jobs de garde d'enfants</a></li>
            <li><a href="/how-it-works" class="text-decoration-none">Comment ça marche</a></li>
            <li><a href="/pricing" class="text-decoration-none">Tarifs</a></li>
        </ul>
        <div class="actions">
            <a href="/login" class="btn btn-light me-2">Connexion</a>
            <a href="/register" class="btn btn-outline-light">S'inscrire</a>
        </div>
    </nav>
</header>
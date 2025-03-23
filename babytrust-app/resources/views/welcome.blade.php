<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babytrust - Plateforme de Garde d'Enfants</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Charge les styles Tailwind CSS -->
</head>
<body class="bg-gray-50">
    <header class="flex justify-between items-center p-4 bg-white shadow-md">
        <div class="text-xl font-bold text-blue-600">Babytrust</div>
        <nav class="flex space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-600">Trouver un Baby-sitter</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Offrir ses Services</a>
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Se connecter</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">S'inscrire</a>
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Se connecter</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">S'inscrire</a>
        </nav>
    </header>

    <main class="p-8">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenue sur Babytrust</h1>
        <p class="mt-4 text-gray-600">Trouvez facilement des baby-sitters qualifiés ou proposez vos services.</p>
        <div class="mt-8 flex space-x-4">
            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Rechercher un Baby-sitter</a>
            <a href="#" class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Devenir Baby-sitter</a>
        </div>
    </main>

    <footer class="mt-16 bg-gray-100 p-4 text-center">
        <p class="text-gray-600">© 2023 Babytrust. Tous droits réservés.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Charge le fichier JS compilé -->
</body>
</html>
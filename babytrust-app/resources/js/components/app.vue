<template>
    <div>
        <!-- En-tête -->
        <header>
            <nav>
                <div class="logo">
                    <img src="/images/logo.png" alt="Logo" />
                </div>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Jobs de garde d'enfants</a></li>
                    <li><a href="#">Comment ça marche</a></li>
                    <li><a href="#">Tarifs</a></li>
                </ul>
                <div class="actions">
                    <button>Connexion</button>
                    <button>S'inscrire</button>
                </div>
            </nav>
        </header>

        <!-- Section Principale -->
        <main>
            <section class="hero">
                <h1>
                    La plateforme de garde d'enfants approuvée par tous les
                    parents
                </h1>
                <p>Bienvenue sur Babytrust !</p>
            </section>

            <section class="search-bar">
                <input type="text" placeholder="Trouvez votre babysitter" />
                <button>Rechercher</button>
            </section>

            <section class="reviews">
                <div class="ratings">
                    <span>★★★★☆ 4,7 / 5</span>
                </div>
                <div class="partners">
                    <img src="../assets/partners-logos.svg" alt="Partenaires" />
                </div>
            </section>
        </main>
    </div>
</template>

<script>
// Importez l'image du logo
import logo from "../assets/logo.png";

export default {
    name: "App",
    data() {
        return {
            logo, // Rendre l'image disponible dans le template
        };
    },
};
</script>

<style scoped>
/* Styles personnalisés */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #007bff;
    color: white;
    padding: 1rem;
}

header nav .logo img {
    height: 40px;
}

header nav ul {
    list-style: none;
    display: flex;
    gap: 1rem;
}

header nav ul li a {
    color: white;
    text-decoration: none;
}

header nav .actions button {
    margin-left: 1rem;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.hero {
    text-align: center;
    margin-top: 2rem;
}

.hero h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.search-bar {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.search-bar input {
    padding: 0.5rem;
    width: 300px;
}

.search-bar button {
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.reviews {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin-top: 2rem;
}

.reviews .ratings {
    font-size: 1.5rem;
    color: gold;
}
</style>

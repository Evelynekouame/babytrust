<!-- resources/js/components/SearchBar.vue -->
<template>
    <form
        @submit.prevent="handleSearch"
        class="d-flex justify-content-center mb-5"
    >
        <input
            type="text"
            v-model="query"
            class="form-control me-2"
            placeholder="Trouvez votre babysitter"
        />
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            query: "",
        };
    },
    methods: {
        handleSearch() {
            alert(`Vous avez recherché : ${this.query}`);
            // Ajoutez ici une logique pour envoyer la requête au serveur
        },
    },
};
</script>

<style scoped>
form {
    margin-top: 2rem;
}
</style>

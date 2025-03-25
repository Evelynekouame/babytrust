import { createApp } from 'vue';
import SearchBar from './components/SearchBar.vue';

const app = createApp({});
app.component('search-bar', SearchBar);
app.mount('#search-bar');
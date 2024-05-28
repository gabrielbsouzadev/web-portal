import './bootstrap';


import Alpine from 'alpinejs';

import { createApp } from 'vue';
import CookinupApp from './cookinup-components/App.vue';


window.Alpine = Alpine;
Alpine.start();

const app = createApp();

app.component('app', CookinupApp);
app.mount('#app');

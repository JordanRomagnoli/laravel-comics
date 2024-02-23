import './bootstrap';

// Ci portiamo appresso il file scss
import '~resources/scss/app.scss';
import '~resources/scss/header.scss';
import '~resources/scss/welcome.scss';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

// Ci portiamo appresso tutte le immagini che si trovano nella cartella resources/img
import.meta.glob([
    '../img/**'
]);

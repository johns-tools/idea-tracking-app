import Alpine from 'alpinejs';
import '../css/app.css';

import Alpine from 'alpinejs';
import '../css/app.css';

declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

window.Alpine = Alpine;

Alpine.start();

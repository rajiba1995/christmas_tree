import './bootstrap';
import Alpine from 'alpinejs';
import toastr from 'toastr';

window.Alpine = Alpine;
window.toastr = toastr; // Make Toastr globally available

Alpine.start();

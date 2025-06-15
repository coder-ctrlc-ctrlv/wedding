import TimeCounter from '../components/counter/TimeCounter.js';
import Modal from '../components/modal/Modal.js';

new TimeCounter('2025-08-01 16:40:00').start();
document.addEventListener('DOMContentLoaded', function () {
    Modal.init();
});
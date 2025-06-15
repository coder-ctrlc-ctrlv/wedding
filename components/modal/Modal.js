export default class Modal {
    static init() {
        this.modal = document.getElementById('modal');
        this.title = document.getElementById('modalTitle');
        this.message = document.getElementById('modalMessage');
        this.image = document.getElementById('modalImage');
        document.getElementById('closeModal')?.addEventListener('click', this.close.bind(this));
    }

    static show(title, message, image) {
        this.title.textContent = title;
        this.message.textContent = message;
        this.image.src = image;
        this.modal.classList.remove('modal--hidden');
    }

    static close() {
        this.modal.classList.add('modal--hidden');
    }
}
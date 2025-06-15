import Modal from '/../../components/modal/Modal.js';

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    if (!form) return;
    form.addEventListener('submit', onSubmit);
});

async function onSubmit(event) {
    event.preventDefault();
    const formData = new FormData(this);

    const defaultError = 'Неизвестная ошибка';
    const successImage = '../../images/success.webp';
    const errorImage = '../../images/error.webp';

    try {
        const response = await fetch(
            'components/form/form-handler.php',
            {
                method: 'POST',
                body: formData
            }
        );

        if (!response.ok) {
            const errorByStatus = {
                404: 'Гость не найден',
                409: 'Вы уже отправили свой ответ',
            }
            const message = errorByStatus[response.status] ?? defaultError;
            Modal.show('Ошибка', message, errorImage);
            return
        }

        Modal.show('Готово', 'Спасибо! Ваш ответ был отправлен.', successImage);
    } catch (error) {
        Modal.show('Ошибка', defaultError, errorImage);
    }
}
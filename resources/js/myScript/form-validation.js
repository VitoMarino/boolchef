document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const nameInput = document.querySelector('#name');
    const lastnameInput = document.querySelector('#lastname');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');
    const passwordConfirmInput = document.querySelector('#password-confirm');
    const requiredField = document.querySelectorAll('.valid-feedback');

    form.addEventListener('submit', function (event) {
        let errors = [];

        // Clear previous errors
        document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        requiredField.forEach(field => field.style.display = 'block');

        // Validazione nome
        if (nameInput.value.trim() === '') {
            errors.push({ field: nameInput, message: 'Il nome è obbligatorio.' });
            requiredField.forEach(field => field.style.display = 'none');

        } else if (nameInput.value.length > 255) {
            requiredField.forEach(field => field.style.display = 'none');

            errors.push({ field: nameInput, message: 'Il nome non può superare 255 caratteri.' });
        }

        // Validazione cognome
        if (lastnameInput.value.trim() === '') {
            errors.push({ field: lastnameInput, message: 'Il cognome è obbligatorio.' });
            requiredField.forEach(field => field.style.display = 'none');
        } else if (lastnameInput.value.length > 255) {
            errors.push({ field: lastnameInput, message: 'Il cognome non può superare 255 caratteri.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione email
        if (emailInput.value.trim()=== '') {
            errors.push({ field: emailInput, message: "Inserisci un'email valida." });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione password
        if (passwordInput.value.length < 8) {
            errors.push({ field: passwordInput, message: 'La password deve avere almeno 8 caratteri.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Conferma password
        if (passwordInput.value !== passwordConfirmInput.value) {
            errors.push({ field: passwordConfirmInput, message: 'Le password non coincidono.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Se ci sono errori, prevenire l'invio del form e visualizzare gli errori
        if (errors.length > 0) {
            event.preventDefault();
            displayErrors(errors);
        }
    });



    function displayErrors(errors) {
        errors.forEach(error => {
            const errorContainer = error.field.nextElementSibling;
            error.field.classList.add('is-invalid');
            if (errorContainer && errorContainer.classList.contains('invalid-feedback')) {
                errorContainer.innerHTML += `<strong>${error.message}</strong>`;
            }
        });
    }
});

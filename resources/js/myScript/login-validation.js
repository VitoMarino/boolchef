console.log("Il file JS è stato caricato correttamente.");

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');
    const requiredField = document.querySelectorAll('.valid-feedback');

    form.addEventListener('submit' , function (event) {
        let errors = [];

        document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        requiredField.forEach(field => field.style.display = 'block');

        //Validazione email
        if (emailInput.value.trim() ==='') {
            errors.push({ field:emailInput, message: 'La email è obbligatoria.'});
            requiredField.forEach(field => field.style.display = 'none');
        } //else {
            // Controlla se l'email esiste nel database
//            fetch(checkEmailUrl, {
//                method: 'POST',
//               headers: {
//                    'Content-Type': 'application/json',
//                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
//                },
//                body: JSON.stringify({ email: emailInput.value.trim() }),
//            })
//            .then(response => response.json())
//            .then(data => {
//               if (!data.exists) {
//                    errors.push({ field: emailInput, message: 'L\'email non è associata a nessun utente.' });
//                }

                // Se ci sono errori, impedisci l'invio del modulo
//                if (errors.length > 0) {
//                    event.preventDefault();
//                    displayErrors(errors);
//                }
//            })
//            .catch(error => console.error('Errore:', error));
//        }

        //Validazione password
        if (passwordInput.value.trim() === '') {
            errors.push({ field:passwordInput, message: 'La password è obbligatoria'});

            requiredField.forEach(field => field.style.display = 'none');
        }

        //Prevenzione submit e mostra messaggi
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


    const form = document.querySelector('form');
    const addressInput = document.querySelector('#address');
    const telephoneInput = document.querySelector('#telephone');
    const visibilityInput = document.querySelector('#visibility');
    const cvFileInput = document.querySelector('#CV');
    const photographFileInput = document.querySelector('#photograph');
    const specializationsCheckboxes = document.querySelectorAll('input[name="specializations[]"]');
    const requiredField = document.querySelectorAll('.valid-feedback'); // Assuming this is for validation feedback

    form.addEventListener('submit', function (event) {
        let errors = [];

        // Clear previous errors
        document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        requiredField.forEach(field => field.style.display = 'block');



        // Validazione indirizzo (opzionale, tra 3 e 150 caratteri)
        if (addressInput.value.trim() !== '' && (addressInput.value.length < 3 || addressInput.value.length > 150)) {
            errors.push({ field: addressInput, message: 'L\'indirizzo deve avere tra 3 e 150 caratteri.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione numero di telefono (obbligatorio e solo numeri)
        if (telephoneInput.value.trim() === '') {
            errors.push({ field: telephoneInput, message: 'Il numero di telefono è obbligatorio.' });
            requiredField.forEach(field => field.style.display = 'none');
        } else if (!/^\d+$/.test(telephoneInput.value)) {
            errors.push({ field: telephoneInput, message: 'Il numero di telefono deve contenere solo numeri.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione visibilità (deve essere "0" o "1")
        if (visibilityInput.value !== "0" && visibilityInput.value !== "1") {
            errors.push({ field: visibilityInput, message: 'Seleziona una visibilità valida.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione specializzazioni (almeno una selezionata)
        const selectedSpecializations = Array.from(specializationsCheckboxes).filter(checkbox => checkbox.checked);
        if (selectedSpecializations.length === 0) {
            errors.push({ field: specializationsCheckboxes[0].closest('.d-flex.flex-wrap'), message: 'Seleziona almeno una specializzazione.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione file CV (opzionale, massimo 20MB)
        if (cvFileInput.files.length > 0 && cvFileInput.files[0].size > 20000000) {
            errors.push({ field: cvFileInput, message: 'Il file CV non deve superare i 20MB.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Validazione fotografia (opzionale, massimo 20MB)
        if (photographFileInput.files.length > 0 && photographFileInput.files[0].size > 20000000) {
            errors.push({ field: photographFileInput, message: 'La fotografia non deve superare i 20MB.' });
            requiredField.forEach(field => field.style.display = 'none');
        }

        // Se ci sono errori, prevenire l'invio del form e visualizzare gli errori
        if (errors.length > 0) {
            event.preventDefault();
            displayErrors(errors);
        }
    });

    // Funzione per visualizzare gli errori
    function displayErrors(errors) {
        errors.forEach(error => {
            const errorContainer = error.field.parentElement; // Assuming error feedback is within the same parent element

            if (errorContainer) {
                const errorElement = document.createElement('p');
                errorElement.classList.add('invalid-feedback');
                errorElement.textContent = error.message;
                errorContainer.appendChild(errorElement);
            }

            error.field.classList.add('is-invalid');
        });
    }


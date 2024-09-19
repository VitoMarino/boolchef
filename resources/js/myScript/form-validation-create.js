document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
      // Resetta tutti i messaggi di errore
      clearErrors();

      let hasError = false;

      // Validazione indirizzo
      const address = document.getElementById('address');
      if (address.value && (address.value.length < 3 || address.value.length > 150)) {
        showError(address, 'L\'indirizzo deve avere tra 3 e 150 caratteri.');
        hasError = true;
      }

      // Validazione numero di telefono
      const telephone = document.getElementById('telephone');
      if (!telephone.value || !/^\d+$/.test(telephone.value)) {
        showError(telephone, 'Il numero di telefono è obbligatorio e deve contenere solo numeri.');
        hasError = true;
      }

      // Validazione visibilità
      const visibility = document.getElementById('visibility');
      if (visibility.value !== "0" && visibility.value !== "1") {
        showError(visibility, 'Seleziona una visibilità valida.');
        hasError = true;
      }

      // Validazione specializzazioni
      const specializations = document.querySelectorAll('input[name="specializations[]"]:checked');
      if (specializations.length === 0) {
        showError(document.querySelector('.d-flex.flex-wrap'), 'Seleziona almeno una specializzazione.');
        hasError = true;
      }

      // Validazione file CV (massimo 20MB)
      const cvFile = document.getElementById('CV');
      if (cvFile.files.length > 0 && cvFile.files[0].size > 20000000) {
        showError(cvFile, 'Il file CV non deve superare i 20MB.');
        hasError = true;
      }

      // Validazione fotografia (massimo 20MB)
      const photographFile = document.getElementById('photograph');
      if (photographFile.files.length > 0 && photographFile.files[0].size > 20000000) {
        showError(photographFile, 'La fotografia non deve superare i 20MB.');
        hasError = true;
      }

      // Se c'è un errore, fermiamo l'invio del form
      if (hasError) {
        event.preventDefault(); // Blocca l'invio del form se ci sono errori
      }
    });

    // Funzione per mostrare l'errore
    function showError(input, message) {
      const errorDiv = document.createElement('div');
      errorDiv.classList.add('alert', 'alert-danger', 'mb-3');
      errorDiv.innerText = message;
      input.parentElement.insertBefore(errorDiv, input);
    }

    // Funzione per resettare gli errori
    function clearErrors() {
      const errors = document.querySelectorAll('.alert.alert-danger');
      errors.forEach(function(error) {
        error.remove();
      });
    }
  });

let clientToken = window.clientToken;

    braintree.dropin.create({
      authorization: clientToken,
      container: '#dropin-container-1'
    }, function (createErr, instance) {
      if (createErr) {
        console.error('Create Error', createErr);
        return;
      }
      let form = document.querySelector('#payment-form-1');
      form.addEventListener('submit', function (event) {
        event.preventDefault();
        instance.requestPaymentMethod(function (err, payload) {
          if (err) {
            console.error('Request Payment Method Error', err);
            return;
          }
          // Aggiungi il nonce al form e invia
          let nonceInput = document.createElement('input');
          nonceInput.type = 'hidden';
          nonceInput.name = 'payment_method_nonce';
          nonceInput.value = payload.nonce;
          form.appendChild(nonceInput);
          form.submit();
        });
      });
    });


    braintree.dropin.create({
        authorization: clientToken,
        container: '#dropin-container-2'
      }, function (createErr, instance) {
        if (createErr) {
          console.error('Create Error', createErr);
          return;
        }
        let form = document.querySelector('#payment-form-2');
        form.addEventListener('submit', function (event) {
          event.preventDefault();
          instance.requestPaymentMethod(function (err, payload) {
            if (err) {
              console.error('Request Payment Method Error', err);
              return;
            }
            // Aggiungi il nonce al form e invia
            let nonceInput = document.createElement('input');
            nonceInput.type = 'hidden';
            nonceInput.name = 'payment_method_nonce';
            nonceInput.value = payload.nonce;
            form.appendChild(nonceInput);
            form.submit();
          });
        });
      });

      braintree.dropin.create({
        authorization: clientToken,
        container: '#dropin-container-3'
      }, function (createErr, instance) {
        if (createErr) {
          console.error('Create Error', createErr);
          return;
        }
        let form = document.querySelector('#payment-form-3');
        form.addEventListener('submit', function (event) {
          event.preventDefault();
          instance.requestPaymentMethod(function (err, payload) {
            if (err) {
              console.error('Request Payment Method Error', err);
              return;
            }
            // Aggiungi il nonce al form e invia
            let nonceInput = document.createElement('input');
            nonceInput.type = 'hidden';
            nonceInput.name = 'payment_method_nonce';
            nonceInput.value = payload.nonce;
            form.appendChild(nonceInput);
            form.submit();
          });
        });
      });

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modulo di Pagamento</title>
    <script src="https://js.braintreegateway.com/web/3.88.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.43.0/js/dropin.min.js"></script>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="{{ route('payment.process') }}" method="POST">
        @csrf
        <div id="dropin-container"></div> <!-- Div per i campi -->
        <input type="hidden" name="payment_method_nonce">
        <input type="hidden" name="amount" value="10.00"> <!-- esempio di importo -->
        <button type="submit">Paga</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var clientToken = "{{ $clientToken }}";

            braintree.dropin.create({
                authorization: clientToken,
                container: '#dropin-container'
            }, function (createErr, instance) {
                if (createErr) {
                    console.error(createErr);
                    return;
                }
                document.querySelector('form').addEventListener('submit', function (event) {
                    event.preventDefault();

                    instance.requestPaymentMethod(function (err, payload) {
                        document.querySelector('input[name="payment_method_nonce"]').value = payload.nonce;
                        document.querySelector('form').submit();
                    });
                });
            });
        });
    </script>
</body>
</html>

@extends('layouts.main')

@push('custom-header')

@endpush

@section('content')
    <div class="container">
        <div class="text-center my-5">
            <p id="message"></p>

            <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{config('services.stripe.public')}}');

        const pageUrl = new URLSearchParams(window.location.search);

        const clientSecret = pageUrl.get('payment_intent_client_secret');

        const code = pageUrl.get('code');

        const plan = pageUrl.get('plan');

        const _token = '{{@csrf_token()}}';

        // Retrieve the PaymentIntent
        stripe.retrievePaymentIntent(clientSecret).then(({paymentIntent}) => {
            const message = document.querySelector('#message')

            switch (paymentIntent.status) {
                case 'succeeded':
                    message.innerText = 'Success! Payment received.';
                    break;

                case 'processing':
                    message.innerText = "Payment processing. We'll update you when payment is received.";
                    break;

                case 'requires_payment_method':
                    message.innerText = 'Payment failed. Please try another payment method.';
                    break;

                default:
                    message.innerText = 'Something went wrong.';
                    break;
            }

            const data = { code, plan, _token, status: paymentIntent.status };

            fetch('/payment-stripe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log('Success:', data);
                    if(data.redirectLink) {
                        window.location.href = data.redirectLink;
                    } else {
                        history.back();
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    history.back()
                });
        });


    </script>
@endpush
@extends('/template/layout')

@section('title', 'Checkout Subscription')

@section('custom-csspage', '/css/checkout.css')

@section('content')
    <h1 class="text-orange">Subscription Payment</h1>

    @foreach ($subs as $item)
        <div class="row mt-5">
            <div class="col-12" style="background-color: white; border-radius: 7px; height: 22vh">
                <div class="container row mt-3">
                    <h2>Your Preferred Plan</h2>
                </div>
                <div class="container row mt-3">
                    <div class="col-2">
                        <img src="https://github.com/nathrizandi/brainery/blob/main/public/assets/brain10.png?raw=true"
                            alt="" style="width: 8vw">
                    </div>
                    <div class="col-8">
                        <br>
                        <h3>{{ $item->duration }} Month(s) Subscription</h3>
                        <p>Free Access to All Learning Content</p>
                    </div>
                    <div class="col-2">
                        <br>
                        <h3>$ {{ $item->price }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-10"></div>
            <div class="col-2">
                <button id="pay-button" type="button" class="btn btn-outline btn-sm checkout-btn"
                    style="margin-left: 3vw">Submit</button>
            </div>
        </div>
    @endforeach

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    alert("Payment successful!");
                    console.log(result);

                    // Send an AJAX request to update the payment status
                    fetch("{{ route('checkout.success') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                payment_id: '{{ $id }}'
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            if (data.status === 'success') {
                                window.location.href = '{{ route('payment.success') }}';
                            }
                        })
                        .catch(error => console.error('Error:', error));
                },
                onPending: function(result) {
                    alert("Waiting for your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("Payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    alert('You closed the popup without finishing the payment');
                }
            });
        });
    </script>
@endsection

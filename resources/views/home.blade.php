@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form action="{{ asset('pay') }}" method="POST">
    {{ csrf_field() }}
 <script
     src="https://checkout.stripe.com/checkout.js" class="stripe-button"
     data-key="{{ env('STRIPE_KEY') }}"
     data-amount="500"
     data-name="Stripe決済デモ"
     data-label="決済をする"
     data-description="これはデモ決済です"
     data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
     data-locale="auto"
     data-currency="JPY">
 </script>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

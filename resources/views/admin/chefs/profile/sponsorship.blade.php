@extends('layouts.admin')

@section('content')
    <h1 class="text-center">
        Scegli un pacchetto di Sponsorizzazioni
        <i class="fa-solid fa-sack-dollar"></i>
    </h1>
    <hr class="mb-5">

    @if(session('not-auth'))
        <div class="alert alert-danger">
            {{session('not-auth')}}
        </div>
    @endif

    <div class="d-flex justify-content-center">
        @if ($chef->isSponsored())
            <div>
                <h4>La tua sponsorizzazione attuale:</h4>

                @foreach ($chef->sponsorships as $sponsorship)
                    @if ($sponsorship->pivot->start_date <= now() && $sponsorship->pivot->end_date >= now())
                        <h5>Tipo: {{$sponsorship->name}}</h5>
                        <p>Inizio: {{ $sponsorship->pivot->start_date }}</p>
                        <p>Fine: {{ $sponsorship->pivot->end_date }}</p>
                    @endif
                @endforeach
            </div>

        @else

        <div>
            <h4>Non hai sponsorizzazioni attive</h4>
            <p>Acquistane una per i vantaggi eslusivi!</p>
        </div>

        @endif





        <div class="card me-3" style="width: 18rem;">
            <div class="card-body">
                <h4>
                    Basic
                    <i class="fa-solid fa-sack-dollar"></i>
                </h4>
                <p class="card-text">
                    2,99 € per 24 ore di sponsorizzazione
                </p>
            </div>
            <form action="{{ route('admin.sponsorships.checkout') }}" method="POST" id="payment-form-1">
                @method("POST")
                @csrf
                <input type="hidden" name="sponsorship_id" value="1">
                <div id="dropin-container-1"></div>
                <button type="submit" class="btn btn-primary">Acquista</button>
            </form>
        </div>

        <div class="card me-3" style="width: 18rem;">
            <div class="card-body">
                <h4>
                    Essential
                    <i class="fa-solid fa-sack-dollar"></i>
                    <i class="fa-solid fa-sack-dollar"></i>
                </h4>
                <p class="card-text">
                    5,99 € per 72 ore di sponsorizzazione
                </p>
            </div>
            <form action="{{ route('admin.sponsorships.checkout') }}" method="POST" id="payment-form-2">
                @method("POST")
                @csrf
                <input type="hidden" name="sponsorship_id" value="2">
                <div id="dropin-container-2"></div>
                <button type="submit" class="btn btn-primary">Acquista</button>
            </form>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4>
                    Pro
                    <i class="fa-solid fa-sack-dollar"></i>
                    <i class="fa-solid fa-sack-dollar"></i>
                    <i class="fa-solid fa-sack-dollar"></i>
                </h4>
                <p class="card-text">
                    9,99 € per 144 ore di sponsorizzazione
                </p>
            </div>
            <form action="{{ route('admin.sponsorships.checkout') }}" method="POST" id="payment-form-3">
                @method("POST")
                @csrf
                <input type="hidden" name="sponsorship_id" value="3">
                <div id="dropin-container-3"></div>
                <button type="submit" class="btn btn-primary">Acquista</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{route('payment.form')}}">Vai al checkout</a>
    </div>

@endsection


@section('scripts')
<script src="https://js.braintreegateway.com/web/dropin/1.31.0/js/dropin.min.js"></script>
<script>
    window.clientToken = @json($clientToken);
</script>
@vite('resources/js/myScript/sponsorshipBraintree.js')
@endsection

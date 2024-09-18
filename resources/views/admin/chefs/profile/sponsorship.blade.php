@extends('layouts.admin')

@section('content')
    <h1 class="text-center">
        Sponsorizzazioni
        <i class="fa-solid fa-sack-dollar"></i>
    </h1>
    <hr class="mb-5">

    <div class="d-flex justify-content-center">
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
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{route('payment.form')}}">Vai al checkout</a>
    </div>

@endsection

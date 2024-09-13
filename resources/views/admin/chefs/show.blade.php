@extends('layouts.admin')

@section('content')
    <h1 class="text-center">
        Benvenuto Chef {{ $chef->user->name }} {{ $chef->user->lastname }}
    </h1>
    <h4 class="text-center text-secondary">
        Questa è la tua area riservata dove puoi visualizzare e gestire il tuo profilo
    </h4>
    <hr>

    <section class="d-flex justify-content-center">
        <div class="me-3">
            <a class="btn btn-success" href="{{ asset('storage/' . $chef->CV) }}">Il tuo CV</a>
        </div>

        <div class="me-3">
            <a class="btn btn-warning" href="{{ route('admin.chefs.edit', $chef) }}">Modifica profilo</a>
        </div>

        <div>
            <form class="d-flex align-items-center" action="{{ route('admin.chefs.destroy', $chef) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina profilo" class="btn btn-danger mb-2">
            </form>
        </div>
    </section>


    <!--PROFILO-->
    <div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 30rem;">
            @if (session('edit-chef'))
                <div class="alert alert-success">
                    {{ session('edit-chef') }}
                </div>
            @endif
            @if (session('create-chef'))
                <div class="alert alert-success">
                    {{ session('create-chef') }}
                </div>
            @endif
            <img src="{{ asset('storage/' . $chef->photograph) }}" alt="Img">
            <div class="card-body">
                <h4>Dati profilo</h4>
                <p class="card-text">Località {{ $chef->user->address }} </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>
                        Il mio contatto:
                    </strong>
                    {{ $chef->telephone }}
                </li>

                <li class="list-group-item">
                    <strong>
                        Specializzata in cucina:
                    </strong>
                    @foreach ($chef->specializations as $specialization)
                        {{ $specialization->name }}
                    @endforeach
                </li>

                <li class="list-group-item">
                    <strong>
                        Descrizione "piatti forte dello chef":
                    </strong>
                    {{ $chef->description_of_dishes }}
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <!--CARD MESSAGGI-->

        <a href="/message">
            <div class="card my_card m-3" style="width: 18rem">
                <div class="card-body">
                    <i class="fa-regular fa-message"></i>
                    <h5 class="card-title">Messaggi</h5>
                    <p class="card-text">
                        In questa sezione puoi visualizzare i messaggi che ti sono stati
                        inviati e gestire i tuoi clienti
                    </p>
                </div>
            </div>
        </a>

        <!--CARD RECENSIONI-->
        <a href="/review">
            <div class="card my_card m-3" style="width: 18rem">
                <div class="card-body">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <h5 class="card-title">Recensioni</h5>
                    <p class="card-text">
                        In questa sezione puoi visualizzare le tue recensioni
                    </p>
                </div>
            </div>
        </a>

        <!--CARD SPONSORIZZAZIONI-->
        <a href="/sponsorship">
            <div class="card my_card m-3" style="width: 18rem">
                <div class="card-body">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h5 class="card-title">Sponsorizzazioni</h5>
                    <p class="card-text">
                        Qui potrai gestire la tua sponsorizzazione come Chef
                    </p>
                </div>
            </div>
        </a>

        <!--CARD STATISTICHE-->
        <a href="/static">
            <div class="card my_card m-3" style="width: 18rem">
                <div class="card-body">
                    <i class="fa-solid fa-chart-line"></i>
                    <h5 class="card-title">Statistiche</h5>
                    <p class="card-text">
                        Qui potrai vedere l'andamento generale del tuo profilo
                    </p>
                </div>
            </div>
        </a>
    </div>
@endsection

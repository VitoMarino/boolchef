@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="card" style="width: 18rem;">
            <img :src="{{ $chef->photograph }}" alt="la foto">
            <div class="card-body">
                <h2 class="card-title">Chef {{ $chef->users->name }} {{ $chef->users->lastname }} </h2>
                <p class="card-text">Località {{ $chef->users->address }} </p>
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
            <div class="card-body">
                <a href="{{ route('admin.chefs.index') }}" class="card-link">Back to the chefs</a>
            </div>
        </div>

    </div>
@endsection

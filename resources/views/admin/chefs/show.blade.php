@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="card" style="width: 18rem;">
            @if (session('edit-chef'))
                <div class="alert alert-success">
                    {{session('edit-chef')}}
                </div>
            @endif
            @if (session('create-chef'))
                <div class="alert alert-success">
                    {{session('create-chef')}}
                </div>
            @endif
            <img src="{{asset('storage/'.$chef->photograph)}}" alt="Img">
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
            <div class="text-center mt-1">
                <a href="{{asset('storage/'.$chef->CV)}}">Scarica CV</a>
            </div>
            <div class="text-center mb-2">
                <form action="{{ route('admin.chefs.destroy', $chef) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="btn btn-danger mb-2">
                </form>

                <a class="btn btn-primary" href="{{route('admin.chefs.edit', $chef)}}">Modifica profilo</a>
            </div>
        </div>
    </div>
@endsection

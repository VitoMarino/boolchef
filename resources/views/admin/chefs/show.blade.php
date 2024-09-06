@extends('layouts.admin')

@section('content')
    <section class="container">

        <ul class="list-group">
            <h1>SOPRATUTTO</h1>
            <img :src="{{ $chef->photograph }}" alt="la foto">
            <li class="list-group-item">{{ $chef->users->name }}</li>
            <li class="list-group-item">{{ $chef->users->lastname }}</li>
            <li class="list-group-item">{{ $chef->users->address }}</li>
            <li class="list-group-item">{{ $chef->description_of_dishes }}</li>
            <li class="list-group-item">{{ $chef->telephone }}</li>
            <li class="list-group-item">
                @foreach ($chef->specializations as $specialization)
                    {{ $specialization->name }}
                @endforeach
            </li>
        </ul>



    </section>
@endsection

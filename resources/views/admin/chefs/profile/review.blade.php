@extends('layouts.admin')

@section('content')
<h1 class="text-center">
    Recensioni
    <i class="fa-solid fa-pen-to-square"></i>
</h1>

<hr class="mb-5">

<div class="container">
    @foreach ($chef->reviews as $review)
    <div class="card m-5">
        <ul class="list-group">
            <li class="list-group-item"><strong>Titolo:</strong> {{ $review->review_title }}</li>
            <li class="list-group-item"><strong>Nome utente:</strong> {{ $review->user_name }}</li>
            <li class="list-group-item"><strong>Recensione:</strong> {{ $review->review }}</li>
            <li class="list-group-item"><strong>Email utente:</strong> {{ $review->email }}</li>
            <li class="list-group-item"><strong>Data:</strong> {{ $review->created_at }}</li>
        </ul>
    </div>
    @endforeach
</div>

<div class="text-center mt-3">
    <a class="btn btn-warning" href="{{route('admin.chefs.show', $chef)}}">Torna al tuo profilo</a>
</div>

@endsection

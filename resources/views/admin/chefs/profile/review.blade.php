@extends('layouts.admin')

@section('content')
<h1 class="text-center">
    Recensioni
    <i class="fa-solid fa-pen-to-square"></i>
</h1>

<hr class="mb-5">

<div class="container">

    @foreach ($chef->reviews as $review)
        <p><strong>Titolo:</strong> {{ $review->review_title }}</p>
        <p><strong>Nome utente:</strong> {{ $review->user_name }}</p>
        <p><strong>Recensione:</strong> {{ $review->review }}</p>
        <p><strong>Email utente:</strong> {{ $review->email }}</p>
        <p><strong>Data:</strong> {{ $review->created_at }}</p>
    @endforeach
</div>

@endsection

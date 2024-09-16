@extends('layouts.admin')

@section('content')
<h1>
    Recensioni
</h1>

<div class="container">

    @foreach ($chef->reviews as $review)
        <p><strong>Titolo:</strong> {{ $review->review_title }}</p>
        <p><strong>Nome utente:</strong> {{ $review->user_name }}</p>
        <p><strong>Recensione:</strong> {{ $review->review }}</p>
        <p><strong>Email utente:</strong> {{ $review->email }}</p>
    @endforeach
</div>
@endsection

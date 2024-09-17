@extends('layouts.admin')

@section('content')


<h1 class="text-center">
    Messaggi
    <i class="fa-regular fa-message"></i>
</h1>
<hr class="mb-5">

<div class="container">

    @foreach ($chef->messages as $message)
        <p><strong>Email utente:</strong> {{ $message->email_customer }}</p>
        <p><strong>Messaggio:</strong> {{ $message->text_mes }}</p>
    @endforeach
</div>

@endsection

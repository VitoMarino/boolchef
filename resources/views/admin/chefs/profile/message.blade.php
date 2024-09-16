@extends('layouts.admin')

@section('content')

<h1>
    Messaggi
</h1>
<div class="container">

    @foreach ($chef->messages as $message)
        <p><strong>Email utente:</strong> {{ $message->email_customer }}</p>
        <p><strong>Messaggio:</strong> {{ $message->text_mes }}</p>
    @endforeach
</div>

@endsection

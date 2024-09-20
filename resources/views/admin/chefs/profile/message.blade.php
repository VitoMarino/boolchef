@extends('layouts.admin')

@section('content')


<h1 class="text-center">
    Messaggi
    <i class="fa-regular fa-message"></i>
</h1>
<hr class="mb-5">

<div class="container">

    @foreach ($chef->messages as $message)
    <div class="card m-5">
        <ul class="list-group">
            <li class="list-group-item"><strong>Email utente:</strong> {{ $message->email_customer }}</li>
            <li class="list-group-item"><strong>Messaggio:</strong> {{ $message->text_mes }}</li>
            <li class="list-group-item"><strong>Ricevuto il:</strong> {{ $message->created_at }}</li>
        </ul>
    </div>
    @endforeach
</div>

<div class="text-center mt-3">
    <a class="btn btn-warning" href="{{route('admin.chefs.show', $chef)}}">Torna al tuo profilo</a>
</div>

@endsection

@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="address">Indirizzo</label>
        <input type="text" value="address" name="address" class="form-control">
        <label for="telephone"> Numero di telefono</label>
        <input type="number" value="telephone" name="telephone" class="form-control">
        <label for="descriprion_of_dishes">Descrizione dei piatti</label>
        <textarea value="descriprion_of_dishes" name="descriprion_of_dishes"></textarea>

        <select name="visibility">
            <option value="0">
                Non visibile
            </option>
            <option value="1">
                visibile
            </option>

        </select>
        @foreach ($specializations as $specialization)
            <input type="checkbox" name="specializations[]" value="{{ $specialization->id }}"
                id="specialization-check-{{ $specialization->id }}" autocomplete="off">
            <label for="specialization-check-{{ $specialization->name }}">{{ $specialization->name }}</label>
        @endforeach
        <input type="submit">


    </form>
@endsection

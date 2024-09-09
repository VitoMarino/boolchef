@extends('layouts.admin')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <!--Inzio del FORM-->
        <form class="d-flex justify-content-center flex-column" action="{{ route('admin.chefs.update', $chef) }}"
            method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label for="address">
                <strong>
                    Indirizzo
                </strong>
            </label>
            <input type="text" value="Address" name="address" class="form-control mb-3">

            <label for="telephone">
                <strong>
                    Numero di telefono
                </strong>
            </label>
            <input type="text" value="Telephone" name="telephone" class="form-control mb-3">

            <label for="descriprion_of_dishes">
                <strong>
                    Descrizione dei piatti
                </strong>
            </label>
            <textarea class="form-control mb-3" placeholder="Descriprion of dishes" value="descriprion_of_dishes"
                name="descriprion_of_dishes">
=======
<div class="container">
    <!--Inzio del FORM-->
    <form class="d-flex justify-content-center flex-column" action="{{ route('admin.chefs.update', $chef) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="address">
            <strong>
                Indirizzo
            </strong>
        </label>
        <input type="text" value="{{old('address',$chef->address)}}
        " name="address" class="form-control mb-3">

        <label for="telephone">
            <strong>
                Numero di telefono
            </strong>
        </label>
        <input type="text" value="{{old('telephone',$chef->telephone)}}
        " name="telephone" class="form-control mb-3">

        <label for="descriprion_of_dishes">
            <strong>
                Descrizione dei piatti
            </strong>
        </label>
        <textarea class="form-control mb-3" placeholder="Description of dishes" value="" name="description_of_dishes" rows="5" cols="33">
            {{old('description_of_dishes',$chef->description_of_dishes)}}
>>>>>>> 4fd51cdd1b4333e2cc19c16418ef2da2c4248fbe
        </textarea>

            <!--Input file--->
            <label for="photograph">Carica foto profilo</label>
            <input class="mb-3" type="file" name="photograph" id="photograph">
            <label for="file">Carica CV</label>
            <input class="mb-3" type="file" name="CV" id="CV">

<<<<<<< HEAD
            <!--Select della visibilità-->
            <label for="visibility">
                <strong>
                    Seleziona visibilità
                </strong>
            </label>
            <select class="form-select mb-3" aria-label="Default select example" name="visibility" id="visibility">
                <option value="0">
                    Not visible
                </option>
                <option value="1">
                    Visible
                </option>
            </select>

            <!--Checkbox-->
            <label for="specializations">
                <strong>
                    Seleziona la specializzazione
                </strong>
            </label>
            <div class="d-flex flex-wrap" role="group" aria-label="Basic checkbox toggle button group">
                @foreach ($specializations as $specialization)
                    <input type="checkbox" class="btn-check" name="specializations[]" value="{{ $specialization->id }}"
                        id="specialization-check-{{ $specialization->id }}" autocomplete="off">
                    <label class="btn btn-outline-primary m-1" for="specialization-check-{{ $specialization->id }}">
                        {{ $specialization->name }}
                    </label>
                @endforeach
            </div>
=======
        <!--Select della visibilità-->
        <label for="visibility">
            <strong>
                Seleziona visibilità
            </strong>
        </label>
        <select class="form-select mb-3" aria-label="Default select example" name="visibility" id="visibility">
            <option value="0"{{ old('visibility',  $chef->visibility  == 0 ? 'selected' : '' )}}>
                Not visible
            </option>
            <option value="1"{{ old('visibility',  $chef->visibility  == 1 ? 'selected' : '' )}}>
                Visible
            </option>
        </select>

        <!--Checkbox-->
        <label for="specializations">
            <strong>
                Seleziona la specializzazione
            </strong>
        </label>
<<<<<<< HEAD
        <div class="d-flex flex-wrap" role="group" aria-label="Basic checkbox toggle button group">
            @foreach ($specializations as $specialization)
            <input type="checkbox" class="btn-check" name="specializations[]" value="{{ $specialization->id }}"
            id="specialization-check-{{ $specialization->id }}" autocomplete="off">
            <label class="btn btn-outline-primary m-1" for="specialization-check-{{ $specialization->id }}">
                {{ $specialization->name }}
            </label>
            @endforeach
        </div>
=======
        @foreach ($specializations as $specialization)
        <input type="checkbox" name="specializations[]" value="{{ $specialization->id }}"
        id="specialization-check-{{ $specialization->id }}" autocomplete="off"
        {{ in_array($specialization->id, old('specializations',isset($specialization) ? $chef->specializations->pluck('id')->toArray() : [])) ? 'checked' : '' }}>
        <label class="mb-2" for="specialization-check-{{ $specialization->name }}">
            {{ $specialization->name }}
        </label>
        @endforeach
>>>>>>> 4fd51cdd1b4333e2cc19c16418ef2da2c4248fbe
>>>>>>> origin/branchSicurezza

            <!--Button submit-->
            <div class="mt-4">
                <input type="submit" class="btn btn-info">
            </div>
        </form>

    </div>
@endsection

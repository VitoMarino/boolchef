@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-dark table-hover text-center">
            <!--Titoli tabella-->
            <thead>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Indirizzo</th>
                <th>Numero di telefono</th>
                <th>Specializazione</th>
                <th>Edit</th>
                <th>Show</th>
            </thead>

            <!--Contenuto tabella-->
            <tbody>
                @foreach ($chefs as $chef)
                    <tr>
                        <td>
                            {{ $chef->users->name }}
                        </td>
                        <td>
                            {{ $chef->users->lastname }}
                        </td>
                        <td>
                            {{ $chef->address }}
                        </td>
                        <td>
                            {{ $chef->telephone }}
                        </td>
                        <td>
                            @forelse ($chef->specializations as $specialization)
                                <span class="badge text-bg-light">{{ $specialization->name }}</span>
                            @empty
                                <span>
                                    Non specificata
                                </span>
                            @endforelse
                        </td>
                        <td>
                            <a class="button btn-success btn btn-sm" href="{{ route('admin.chefs.edit', $chef) }}">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a class="button btn-primary btn btn-sm" href="{{ route('admin.chefs.show', $chef) }}">
                                Show
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

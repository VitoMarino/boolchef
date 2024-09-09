@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Indirizzo</th>
                <th>Numero di telefono</th>
                <th>Specializazione</th>

            </thead>
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
                                {{ $specialization->name }}

                            @empty

                                <li class="list-group-item">
                                    Non specificata
                                </li>
                            @endforelse
                        </td>
                        <td>
                            <a class="button btn-primary btn btn-lg" href="{{ route('admin.chefs.edit', $chef) }}">Edit</a>

                        </td>
                        <td>
                            <a class="button btn-primary btn btn-lg" href="{{ route('admin.chefs.show', $chef) }}">Show</a>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>


    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div>
            @if (@session('delete-chef') )
                <div class="alert alert-success">
                    {{session('delete-chef')}}
                    <a href="{{route('admin.projects.trash-index')}}">See the trash backet</a>
                </div>
            @endif
        </div>
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
                <th>Delete</th>
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
                        <td>
                            <form action="{{ route('admin.chefs.destroy', $chef) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.chefs.update', $chef) }}" method="POST">
        @method('PUT')





        @csrf




    </form>
@endsection

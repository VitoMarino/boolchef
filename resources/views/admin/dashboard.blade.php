@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('wrong-user'))
            <div class="alert alert-danger">
                {{session('wrong-user')}}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrazione Chef') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <a href="{{ route('admin.chefs.create') }}">
                                Imposta il tuo profilo da chef
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

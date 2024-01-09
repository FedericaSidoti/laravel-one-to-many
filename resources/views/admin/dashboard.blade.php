@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center p-5">
                        <div class="col-3 d-flex p-1">
                            <button class=" btn btn-info">
                                <a href={{route('admin.projects.index')}}>
                                    <h5>Vai alla Lista </h5>
                                    <h5>Modifica Progetto </h5>
                                    <h5>Elimina Progetto </h5>
                                </a>
                            </button>
                        </div>
                        <div class="col-3 d-flex p-1">
                            <button class=" btn btn-info">
                                <h2> <a href="{{route('admin.projects.create')}}">Crea Nuovo</a></h2>
                            </button>
                        </div>

                        <div class="col-3 d-flex p-1">
                            <button class=" btn btn-info">
                                <h2> <a href="{{ route('register') }}">Registra Admin</a></h2>
                            </button>
                        </div>

                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    

    
</div>
@endsection

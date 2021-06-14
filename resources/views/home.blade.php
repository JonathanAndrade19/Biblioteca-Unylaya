@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h3>{{ __('Seja Bem-Vindo a nossa Biblioteca Unyleya') }}</h3>
                        <div>
                            <a href="{{url('autors')}}">Lista dos Autores</a>
                        </div>
                        <div>
                            <a href="{{url('livros')}}">Lista dos Livros</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

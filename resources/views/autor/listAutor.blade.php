@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{url('autors/new')}}">Novo Autor</a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Ano Nascimento</th>
                                <th scope="col">Nacionalidade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($autores as $aut)
                                <tr>
                                    <th scope="row">{{$aut->id}}</th>
                                    <td>{{$aut->nome}}</td>
                                    <td>{{$aut->sexo}}</td>
                                    <td>{{$aut->ano_nascimento}}</td>
                                    <td>{{$aut->nacionalidade}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

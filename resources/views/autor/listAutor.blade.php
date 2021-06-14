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
                                <th scope="col" colspan="2" style="text-align: center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($autores as $aut)
                                <tr>
                                    <th scope="row">{{$aut->id}}</th>
                                    <td>{{$aut->nome}}</td>
                                    <td>{{$aut->sexo}}</td>
                                    <td> {{ \Carbon\Carbon::parse($aut->ano_nascimento)->format('d/m/Y')}}</td>
                                    <td>{{$aut->nacionalidade}}</td>
                                    <td>
                                        <a href="autors/{{$aut->id}}/edit" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <form action="autors/delete/{{$aut->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                                <a class="btn btn-danger">Deletar</a>
                                        </form>
                                    </td>
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

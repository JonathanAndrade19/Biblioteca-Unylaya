@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{url('livros/new')}}">Novo Livro</a></div>

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
                                <th scope="col">Autor</th>
                                <th scope="col">Gênero Literário</th>
                                <th scope="col">Editora</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Ano Lançamento</th>
                                <th scope="col" colspan="2" style="text-align: center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($livros as $livro)
                                <tr>
                                    <th scope="row">{{$livro->id}}</th>
                                    <td>{{$livro->autor}}</td>
                                    <td>{{$livro->genero_literario}}</td>
                                    <td>{{$livro->editora}}</td>
                                    <td>{{$livro->titulo}}</td>
                                    <td> {{ \Carbon\Carbon::parse($livro->ano_lancamento)->format('d/m/Y')}}</td>

                                    <td>
                                        <a href="livros/{{$livro->id}}/edit" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <form method="post">
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

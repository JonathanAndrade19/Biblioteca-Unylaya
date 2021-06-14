@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <a href="{{url('livros')}}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if( Request::is('*/edit'))
                            <div class="container">
                                <h5 style="text-align: center">Editando Autor</h5>
                                <form action="{{url('livros/update')}}/{{ $livros->id }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nome">Autor:</label>
                                        <input type="text" class="form-control" name="autor" value="{{ $livros->autor}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Gênero Literário:</label>
                                        <input type="text" class="form-control" name="genero_literario" value="{{ $livros->genero_literario }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Editora:</label>
                                        <input type="text" class="form-control" name="editora" value="{{ $livros->editora }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Titulo:</label>
                                        <input type="text" class="form-control" name="titulo" value="{{ $livros->titulo }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Ano do Lançamento:</label>
                                        <input type="date" class="form-control" name="ano_lancamento" value="{{ $livros->ano_lancamento }}">
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                    </div>
                                </form>
                            </div>

                        @else
                            <div class="container">
                                <h5 style="text-align: center">Adicionando Novo Autor</h5>
                                <form action="{{url('livros/add')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="autor">Autor:</label>
                                        <input type="text" class="form-control" name="autor">
                                    </div>

                                    <div class="form-group">
                                        <label for="autor">Id_Autor:</label>
                                        <input type="text" class="form-control" name="id_autor">
                                    </div>

                                    <div class="form-group">
                                        <label for="genero_literario">Gênero Literário:</label>
                                        <input type="text" class="form-control" name="genero_literario">
                                    </div>

                                    <div class="form-group">
                                        <label for="editora">Editora:</label>
                                        <input type="text" class="form-control" name="editora">
                                    </div>

                                    <div class="form-group">
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" name="titulo">
                                    </div>

                                    <div class="form-group">
                                        <label for="ano_lancamento">Ano do Lançamento:</label>
                                        <input type="date" class="form-control" name="ano_lancamento">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

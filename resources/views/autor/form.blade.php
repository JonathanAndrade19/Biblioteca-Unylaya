@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <a href="{{url('autors')}}">Voltar</a>
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
                                <form action="{{url('autors/update')}}/{{ $autor->id }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" name="nome" value="{{ $autor->nome}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Sexo:</label>
                                        <input type="text" class="form-control" name="sexo" value="{{ $autor->sexo }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nacionalidade:</label>
                                        <input type="text" class="form-control" name="nacionalidade" value="{{ $autor->nacionalidade }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nascimento</label>
                                        <input type="date" class="form-control" name="ano_nascimento" value="{{ $autor->ano_nascimento }}">
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                    </div>
                                </form>
                            </div>

                        @else
                            <div class="container">
                                <h5 style="text-align: center">Adicionando Novo Autor</h5>
                                <form action="{{url('autors/add')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" name="nome">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Sexo:</label>
                                        <input type="text" class="form-control" name="sexo">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nacionalidade:</label>
                                        <input type="text" class="form-control" name="nacionalidade">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nascimento</label>
                                        <input type="date" class="form-control" name="ano_nascimento">
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

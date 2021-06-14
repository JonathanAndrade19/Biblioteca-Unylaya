@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lista dos Autores') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
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

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

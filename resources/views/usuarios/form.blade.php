@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('usuarios') }}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if ( Request::is('*/edit'))
                                <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nome:</label>
                                        <input type="name" name="name" class="form-control" id="name" aria-describedby="nameHulp" placeholder="Digite seu nome" value="{{ $usuario->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" value="{{ $usuario->email }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Atualizar</button>
                                </form>
                            @else
                                <form action="{{ url('usuarios/add') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nome:</label>
                                        <input type="name" name="name" class="form-control" id="name" placeholder="Digite seu nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

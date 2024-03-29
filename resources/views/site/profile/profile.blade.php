@extends('site.layouts.app')

@section('title', 'Meu Perfil')

@section('content')
    

    <h1>Meu Perfil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Nome: </label>
            <input type="text" name="nome" value="{{ auth()->user()->name }}" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="{{ auth()->user()->email }}" placeholder="E-mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha: </label>
            <input type="password" name="password" placeholder="senha" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Imagem: </label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Atualizar Perfil</button>
        </div>

    </form>

@endsection
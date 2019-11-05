@extends('adminlte::page')

@section('title', 'Transferir')

@section('content_header')
    <h1>Transferir</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
           <h3>Transferir saldo (informe o recebedor)</h3>
        </div>
        @include('admin.includes.alerts')

        <div class="box-body">
            <form method="POST" action="{{ route('confirm.transfer') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" name="sender" placeholder="Informação de quem vai receber o saque (Nome ou Email)" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Proxima etapa</button>
                </div>
            </form>
        </div>
    </div>
@stop
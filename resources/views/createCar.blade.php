@extends('layout')

@section('title')
Criar novo car
@endsection

@section('mainContent')
<h2>Criar Carro</h2>
<form class="form-horizontal" method="post" action="{{ url('/cars') }}">

    @csrf <!--gerar um token contra ataques CSRF--->

    <fieldset>

        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Nome</label>
            <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Insira o Nome" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cor">Cor</label>
            <div class="col-md-4">

                <input id="cor" name="cor" type="text" placeholder="Insira a cor" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="empresa">Empresa</label>
            <div class="col-md-4">
                <input id="empresa" name="empresa" type="text" placeholder="Insira o nome da empresa" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </fieldset>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div>
    <a href="/cars">Mostrar Carros</a>
</div>

@endsection
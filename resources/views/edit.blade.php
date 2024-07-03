@extends('layout')

@section('title')
Actualizar e Elminar Carro
@endsection

@section('mainContent')
<h2>Editar / Eliminar Carro</h2>
<form class="form-horizontal" method="post" action="{{ url('cars/' . $car->id) }}">

    @csrf <!--gerar um token contra ataques CSRF--->
    @method('put') <!--chama o controller update-->

    <fieldset>

        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Nome</label>
            <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Insira o Nome" class="form-control input-md" value="{{$car->nome}}">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cor">Cor</label>
            <div class="col-md-4">

                <input id="cor" name="cor" type="text" placeholder="Insira a cor" class="form-control input-md" value="{{$car->cor}}">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="empresa">Empresa</label>
            <div class="col-md-4">
                <input id="empresa" name="empresa" type="text" placeholder="Insira o nome da empresa" class="form-control input-md" value="{{$car->empresa}}">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-secondary">Actualizar</button>
            </div>
        </div>

    </fieldset>
</form>

<form class="form-horizontal" method="post" action="{{ url('cars/' . $car->id) }}">
    @csrf
    @method('delete')
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-danger">Eliminar</button>
        </div>
    </div>
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
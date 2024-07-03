@extends ('layout')

@section ('mainContent')
<h1>Detalhes do Carro</h1>
<p>ID: {{ $car->id }}</p>
<p>Nome: {{ $car->nome }}</p>
<p>Cor: {{ $car->cor }}</p>
<p>Empresa: {{ $car->empresa }}</p>

<a href="{{$car -> id}}/edit">Editar Carro</a>
@endsection
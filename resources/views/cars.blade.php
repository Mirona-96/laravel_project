@extends ('layout')

@section ('mainContent')
<h1>Lista de Carros</h1>
<table class="table table-striped-columns">
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>
                <a href="cars/{{$car ->id}}">
                    {{$car->nome}}</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a href="{{ url('cars/create') }}">Criar Carros</a>
</div>
@endsection
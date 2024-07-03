@extends ('layout')

@section ('mainContent')
        <h1>Lista de Carro</h1>
        @foreach($cars as $car)
            {{$car->nome}}
        @endforeach
@endsection
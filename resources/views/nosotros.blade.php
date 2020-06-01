@extends('plantilla')

@section('seccion')
    <h1>Mi equipo de trabajo</h1>
    @foreach($equipo as $item)
        <a href="{{ route('nosotros',$item) }}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='Ignacio')
                <h2>El nombres es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam debitis consequuntur 
                    tempore pariatur odit accusantium saepe magnam atque quia vel. Minus, veniam fuga? Quasi, nihil illo? 
                    Tempore nulla corrupti maiores!</p>
                @break
            
            @case($nombre=='Juanito')
                <h2>El nombres es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam debitis consequuntur 
                    tempore pariatur odit accusantium saepe magnam atque quia vel. Minus, veniam fuga? Quasi, nihil illo? 
                    Tempore nulla corrupti maiores!</p>
                @break

            @case($nombre=='Pedrito')
                <h2>El nombres es {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam debitis consequuntur 
                    tempore pariatur odit accusantium saepe magnam atque quia vel. Minus, veniam fuga? Quasi, nihil illo? 
                    Tempore nulla corrupti maiores!</p>
                @break
        @endswitch
    @endif
@endsection
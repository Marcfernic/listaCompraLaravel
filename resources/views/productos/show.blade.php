@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $producto->id ) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$producto->nombre}}</h4>
            <h6>Precio: </h6>
            <h6>Categor&iacute;a: {{$producto->categoria}}</h6>
            <p><strong>Descripción:</strong> {{$producto->descripcion}}</p>
            <p><strong>Estado: </strong>
                @if($producto->pendiente)
                    Producto en la lista.
                    @php
                    $class = "btn btn-success";
                    $texto = "Comprado";
                    @endphp
                @else
                    Producto actualmente comprado.
                    @php
                        $class = "btn btn-danger";
                        $texto = "Comprar";
                    @endphp
                @endif                    
            </p>

            <a class="{{$class}}" href="#">{{$texto}}</a>

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a> 
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@stop
@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $id ) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$producto[0]}}</h4>
            <h6>Precio: </h6>
            <h6>Categor&iacute;a: {{$producto[1]}}</h6>
            <p><strong>Descripción:</strong> &nbsp;</p>
            <p><strong>Estado: </strong>
                    Producto actualmente comprado.
            </p>

            <a class="btn btn-danger" href="#">Pendiente de compra</a>
            <!--
            <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar pel&iacute;cula</a> -->
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@stop
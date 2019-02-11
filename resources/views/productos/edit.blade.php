@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('/productos/edit/' . $producto->id) }}" method="POST">

                        {{method_field('PUT')}}

                        @csrf

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="precio" min="0" max="200" name="precio" value="{{$producto->precio}}" placeholder="Precio">
                        </div>

                        <div class="form-group">
                            <input type="text" name="categoria" value="{{$producto->categoria}}" placeholder="Categoria">
                        </div>

                        <div class="form-group">
                            <input type="url" name="imagen" value="{{$producto->imagen}}" placeholder="url de la imagen">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$producto->descripcion}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
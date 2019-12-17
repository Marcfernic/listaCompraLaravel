<?php

namespace App\Http\Controllers;

use App\ProductosResource;
use Illuminate\Http\Request;

class ProductosResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arrayProductos = ProductosResource::all();
        return view('productos.index', array('arrayProductos'=> $arrayProductos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = new ProductosResource();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductosResource  $productosResource
     * @return \Illuminate\Http\Response
     */
    public function show(ProductosResource $productosResource)
    {
        //
        $producto = ProductosResource::findOrFail($productosResource);
        return view('productos.show', array('producto' => $producto));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductosResource  $productosResource
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductosResource $productosResource)
    {
        //
        $producto = ProductosResource::findOrFail($productosResource);
        return view('productos.edit', array('producto' => $producto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductosResource  $productosResource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosResource $productosResource)
    {
        //
        $producto = ProductosResource::findOrFail($productosResource);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos/show/' . $producto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductosResource  $productosResource
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductosResource $productosResource)
    {
        //
    }
}

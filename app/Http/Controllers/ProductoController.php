<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productos['productos']=Producto::all();
        $productos = Producto::all();
        return view('producto.index', ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosProducto = request()->all();
        $datosProducto = request()->except('_token');
        
        if ($request->hasFile('imagen')) {
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads','public');
        }
        
        Producto::insert($datosProducto);
        return redirect('producto')->with('mensaje','Se ha agregado un nuevo producto al inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = Producto::all();
        $producto = $productos->find($id);
        return view('producto.show', ['producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('imagen')) { //Si existe o se selecciona imagen
            $producto = Producto::findOrFail($id); //Se obtiene la actual de la BD
            Storage::delete('public/'.$producto->imagen); //Se elimina
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads','public'); //Se actualiza la que se seleccionó
        }

        Producto::where('id','=',$id)->update($datosProducto);

        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'), ['mensaje'=>'Se modificaron los datos exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        if (Storage::delete('public/'. $producto->imagen)) {
            Producto::destroy($id);
        }

        return redirect('producto')->with('mensaje','Se ha eliminado un producto del inventario');
    }
}

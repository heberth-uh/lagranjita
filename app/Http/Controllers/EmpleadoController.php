<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados= Empleado::all();
        return view('empleado.index', ['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
        // $datosEmpleado = request()->except('_token');
        // Empleado::insert($datosEmpleado);
        // return response()->json($datosEmpleado);

        $datosEmpleado = request()->except('_token');
        if ($request->hasFile('Imagen')) {
            $datosEmpleado['Imagen'] = $request->file('Imagen')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);
        return redirect('empleado')->with('mensaje','Se ha agregado un nuevo empleado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $id)
    {
        //
        // $empleados = Empleado::all();
        // $empleado = $empleados->find($id);
        // return view('empleado.show', ['empleado'=>$empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado= request()->except(['_token', '_method']);
        if ($request->hasFile('Imagen')) { //Si existe o se selecciona imagen
            $empleado = Empleado::findOrFail($id); //Se obtiene la actual de la BD
            Storage::delete('public/'.$empleado->Imagen); //Se elimina
            $datosEmpleado['Imagen'] = $request->file('Imagen')->store('uploads','public'); //Se actualiza la que se seleccionó
        }
        Empleado::where('id','=',$id)->update($datosEmpleado);
        $empleado= Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'), ['mensaje'=>'Se modificaron los datos exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('empleado')->with('mensaje','Se ha eliminado un producto del inventario');

    }
}


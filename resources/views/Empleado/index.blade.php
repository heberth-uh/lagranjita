@extends('layouts.productosLayout')
@section('content')

    <div class="container is-fullhd my-6">
        <div class="encabezado is-flex is-justify-content-space-between">
            <h1 class="title has-text-info">Empleados</h1>
            <a class="button is-info is-outlined " href="{{ url('/empleado/create') }}">Agregar Empleado</a>
        </div>
        <div class="columns is-multiline is-2">

                @foreach ( $empleados as $empleado)
                <div class="column is-4-desktop is-6-tablet">

                    <div class="card is-flex is-flex-direction-column is-justify-content-space-between" style='height:100%'>

                        <div class="card-image p-6">     
                            <figure class="image is-1by1">
                                <img  class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}" alt="Ilustración del empleado"></figure>
                            </figure>
                        </div>

                        <div class="card-content p-4">
                            <div class="media">
                                <div class="media-content">
                                    <div class="mb-3">
                                        <label class="is-size-6 has-text-info">Nombre:</label>
                                        <p class="subtitle is-6">{{ $empleado->Nombre }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="is-size-6  has-text-info">Apellido Paterno:</label>
                                        <p class="subtitle is-6">{{ $empleado->ApellidoPaterno }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="is-size-6  has-text-info">Apellido Materno:</label>
                                        <p class="subtitle is-6">{{ $empleado->ApellidoMaterno }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="is-size-6  has-text-info">Correo:</label>
                                        <p class="subtitle is-6">{{ $empleado->Correo}}</p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="is-size-6  has-text-info">Telefono:</label>
                                        <p class="subtitle is-6">{{ $empleado->Telefono }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="is-size-6  has-text-info">Turno:</label>
                                        <p class="subtitle is-6">{{ $empleado->Turno }}</p>
                                    </div>
                                    
                                </div>
            
                            </div>
                            <div class="has-text-centered is-flex is-justify-content-space-between">
                                <a class="button is-info " href="{{ url('empleado/'. $empleado->id.'/edit')}}">Editar</a>
                                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="button is-info is-outlined"
                                    onclick="return confirm('¿Realmente desea borrar este producto?')" value="Eliminar">
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

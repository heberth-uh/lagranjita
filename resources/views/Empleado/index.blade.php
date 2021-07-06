@extends('layouts.productosLayout')
@section('content')
    @if(Session::has('mensaje'))
    <div class="notification is-info">
        <button class="delete"></button>
            {{ Session::get('mensaje')}}
    </div>
    @endif
    <div class="container is-fullhd my-6">
        <div class="encabezado is-flex is-justify-content-space-between">
            <h1 class="title has-text-info">Empleados</h1>
            <a class="button is-primary" href="{{ url('/empleado/create') }}">Agregar Empleado</a>
        </div>
        <div class="columns is-multiline m-0 is-2">

                @foreach ( $empleados as $empleado)
                <div class="column is-4-desktop is-6-tablet">

                    <div class="card is-flex is-flex-direction-column">
                        <div class="card-image">
                            <figure class="image is-128x128">
                                <img  class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}" alt="Ilustración del empleado">                             </figure>
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <label class="is-size-5">Nombre:</label>
                                    <p class="title is-5">{{ $empleado->Nombre }}</p>
                                    <label class="is-size-5">Apellido Paterno:</label>
                                    <p class="title is-5">{{ $empleado->ApellidoPaterno }}</p>
                                    <label class="is-size-5">Apellido Materno:</label>
                                    <p class="title is-5">{{ $empleado->ApellidoMaterno }}</p>
                                    <label class="is-size-5">Correo:</label>
                                    <p class="title is-5">{{ $empleado->Correo}}</p>
                                    <label class="is-size-5">Telefono:</label>
                                    <p class="title is-5">{{ $empleado->Telefono }}</p>
                                    <label class="is-size-5">Turno:</label>
                                    <p class="title is-5">{{ $empleado->Turno }}</p>
                                    
                                </div>
            
                            </div>
                            <div class="card-footer has-text-centered">
                                <a class="button is-warning" href="{{ url('empleado/'. $empleado->id.'/edit')}}">Editar</a>
                                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="button is-danger"
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

@extends('layouts.productosLayout')

@section('content')
<div class="contianer">
    <h1 class="title has-text-info">Editar "{{ $empleado->Nombre}}"</h1>
    @if (isset($mensaje))
        <div class="notification is-info">
            <button class="delete"></button>
            {{ $mensaje }}
        </div>
    @endif
    <div class="box">
        <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="field">
                <label class="label">Nombre del empleado:</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $empleado->Nombre}}"
                        placeholder="Ingrese el nombre del empleado" name="Nombre">
                </div>
            </div>
            <div class="field">
                <label class="label">Apellido paterno:</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $empleado->ApellidoPaterno }}"
                        placeholder="Ingrese apellido paterno del empleado" name="apellidopaterno">
                </div>
            </div>
            <div class="field">
                <label class="label">Apellido materno:</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $empleado->ApellidoMaterno }}"
                        placeholder="Ingrese apellido materno del empleado" name="apellidomaterno">
                </div>
            </div>
            <div class="field">
                <label class="label">Correo:</label>
                <div class="control">
                    <input class="input" type="email" value="{{ $empleado->Correo}}"
                        placeholder="Ingrese el correo del empleado" name="correo">
                </div>
            </div>
            <div class="field">
                <label class="label">Telefono:</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $empleado->Telefono}}"
                        placeholder="Ingrese el telefono del empleado" name="telefono">
                </div>
            </div>
            <div class="field">
                <label class="label">Marca</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="turno">
                            <option value="Matutino" {{ $empleado->Turno == "Matutino" ? "selected" : "" }}>Matutino</option>
                            <option value="Vespertino" {{ $empleado->Turno == "Vespertino" ? "selected" : "" }}>Vespertino</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="field">
                <label class="label">Imagen del producto (opcional)</label>
                <div class="file has-name">
                    <label class="file-label">
                        <input class="file-input" value="" type="file" name="Imagen"
                            accept="image/png, image/jpeg, image/jpg">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            < <span class="file-label">
                                Choose a file…
                        </span>
                        <span class="file-name">
                            {{ $empleado->Imagen }} 
                            <img  class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}" alt="Ilustración del empleado">  
                        </span>
                        </span>
                    </label>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Guardar</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
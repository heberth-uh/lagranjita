@extends('layouts.productosLayout')

@section('content')
<div class="contianer">
    <h1 class="title has-text-info">Editar "{{ $empleado->Nombre}}"</h1>
    @if (isset($mensaje))
    <div class="notification is-info">
        <button class="delete"></button>
        {{ $mensaje }}
        <a class="is-underlined" href="{{ url('/empleado') }}">Ver empleados.</a>
    </div>
    @endif
    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
        <div class="box">
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
                <label class="label">Turno</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="turno">
                            <option value="Matutino" {{ $empleado->Turno == "Matutino" ? "selected" : "" }}>Matutino
                            </option>
                            <option value="Vespertino" {{ $empleado->Turno == "Vespertino" ? "selected" : "" }}>
                                Vespertino</option>
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
                            <img class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}"
                                alt="Ilustración del empleado">
                        </span>
                        </span>
                    </label>
                </div>
            </div>


        </div>

        <div class="field is-grouped is-flex is-justify-content-flex-end">
            <div class="control">
                <a href="{{ url('/empleado') }}" class="button is-info is-outlined">Cancelar</a>
            </div>

            <div class="control">
                <button class="button is-info">Guardar</button>
            </div>
        </div>
    </form>

</div>
@endsection
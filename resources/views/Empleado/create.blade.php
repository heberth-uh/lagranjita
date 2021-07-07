@extends('layouts.productosLayout')
@section('content')
    <div class="container m-6">
        <h1 class="title has-text-info">Agregar un nuevo empleado</h1>
        <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
            <div class="box">
                @csrf
                <div class="field">
                    <label class="label">Nombre:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingrese el nombre del empleado" name="nombre">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Apellido Paterno:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingrese los Apellido Paterno del empleado" name="apellidoPaterno">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Apellido Materno:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingrese los Apellido Materno del empleado" name="apellidoMaterno">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="Ingrese el correo del empleado" name="correo">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Teléfono:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingrese el telefono del empleado" name="telefono">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Turno</label>
                    <div class="control">
                        <div class="select">
                            <select class="form-control" name="turno">
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                            </select>
                        </div>
                    </div>
                </div>       
                <div class="field">
                    <label class="label">Foto del Empleado (opcional)</label>
                    <div class="file has-name">
                        <label class="file-label">
                            <input class="file-input" type="file" name="Imagen">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Elegir Foto
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                

            </div>
            <div class="field is-grouped is-flex is-justify-content-flex-end	">
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
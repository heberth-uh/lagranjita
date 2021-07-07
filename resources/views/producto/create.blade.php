@extends('layouts.productosLayout')

@section('content')
<div class="container m-3">
    <h1 class="title has-text-info">Agregar un nuevo producto</h1>
    <form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">
        <div class="box">
            @csrf

            <div class="field">
                <label class="label">Nombre del producto</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Ingrese el nombre del producto" name="nombre">
                </div>
            </div>

            <div class="field">
                <label class="label">Etapa</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="etapa">
                            <option value="iniciación">Iniciación</option>
                            <option value="desarrollo">Desarrollo</option>
                            <option value="finalización">Finalización</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Categoría</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="categoria">
                            <option value="pollo">Pollo</option>
                            <option value="cerdo">Cerdo</option>
                            <option value="pavo">Pavo</option>
                            <option value="rumiantes">Ruminates</option>
                            <option value="cereales y maíz">Celeares y maíz</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Marca</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="marca">
                            <option value="provi">Provi</option>
                            <option value="purina">Purina</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Peso del costal</label>
                        <div class="control">
                            <div class="select">
                                <select class="form-control" name="peso">
                                    <option value="40">40 Kg</option>
                                    <option value="20">20 Kg</option>
                                    <option value="10">10 Kg</option>
                                    <option value="5">5 Kg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Precio (costal)</label>
                        <div class="control">
                            <input class="input" type="number"
                                placeholder="Precio por costal" name="precioSaco">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Precio (Kg)</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Precio por Kg"
                        name="precioKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (sacos)</label>
                <div class="control">
                    <input class="input" type="number"
                        placeholder="Cantidad de sacos" name="totalSacos">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (Kg)</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Cantidad en Kg"
                        name="totalKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Descripción</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Introduzca una descripción del producto"
                        name="descripcion"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label">Imagen del producto (opcional)</label>
                <div class="file has-name">
                    <label class="file-label">
                        <input class="file-input" value="" type="file" name="imagen"
                            accept="image/png, image/jpeg, image/jpg">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            < <span class="file-label">
                                Choose a file…
                        </span>
                        <span class="file-name">
                        </span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

            <div class="field is-grouped is-flex is-justify-content-flex-end">
                <div class="control">
                    <a href="{{ url('/inventario') }}" class="button is-link is-info is-outlined">Cancelar</a>
                </div>
                <div class="control">
                    <button class="button is-info">Guardar</button>
                </div>
            </div>
    </form>

</div>
@endsection
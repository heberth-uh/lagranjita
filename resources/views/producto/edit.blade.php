@extends('layouts.productosLayout')

@section('content')
<div class="contianer">
    <h1 class="title has-text-info">Editar "{{ $producto->nombre}}"</h1>
    <div class="box">
        <form action="{{ url('/producto/' .$producto->id ) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="field">
                <label class="label">Nombre del producto</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $producto->nombre }}"
                        placeholder="Ingrese el nombre del producto" name="nombre">
                </div>
            </div>

            <div class="field">
                <label class="label">Etapa</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="etapa">
                            <option value="iniciación" {{ $producto->etapa == "iniciación" ? "selected" : "" }}>
                                Iniciación</option>
                            <option value="desarrollo" {{ $producto->etapa == "desarrollo" ? "selected" : "" }}>
                                Desarrollo</option>
                            <option value="finalización" {{ $producto->etapa == "finalización" ? "selected" : "" }}>
                                Finalización
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Categoría</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="categoria">
                            <option value="pollo" {{ $producto->categoria == "pollo" ? "selected" : "" }}>Pollo</option>
                            <option value="cerdo" {{ $producto->categoria == "cerdo" ? "selected" : "" }}>Cerdo</option>
                            <option value="pavo" {{ $producto->categoria == "pavo" ? "selected" : "" }}>Pavo</option>
                            <option value="rumiantes" {{ $producto->categoria == "rumiantes" ? "selected" : "" }}>
                                Ruminates</option>
                            <option value="cereales y maíz"
                                {{ $producto->categoria == "cereales y maíz" ? "selected" : "" }}>
                                Celeares y maíz</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Marca</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control" name="marca">
                            <option value="provi" {{ $producto->marca == "provi" ? "selected" : "" }}>Provi</option>
                            <option value="purina" {{ $producto->marca == "purina" ? "selected" : "" }}>Purina</option>
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
                                    <option value="40" {{ $producto->peso == 40 ? "selected" : "" }}>40 Kg</option>
                                    <option value="20" {{ $producto->peso == 20 ? "selected" : "" }}>20 Kg</option>
                                    <option value="10" {{ $producto->peso == 10 ? "selected" : "" }}>10 Kg</option>
                                    <option value="5" {{ $producto->peso == 5 ? "selected" : "" }}>5 Kg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Precio (costal)</label>
                        <div class="control">
                            <input class="input" type="number" value="{{ $producto->precioSaco }}"
                                placeholder="Precio por costal" name="precioSaco">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Precio (Kg)</label>
                <div class="control">
                    <input class="input" type="number" value="{{ $producto->precioKg }}" placeholder="Precio por Kg"
                        name="precioKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (sacos)</label>
                <div class="control">
                    <input class="input" type="number" value="{{ $producto->totalSacos }}"
                        placeholder="Cantidad de sacos" name="totalSacos">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (Kg)</label>
                <div class="control">
                    <input class="input" type="number" value="{{ $producto->totalKg }}" placeholder="Cantidad en Kg"
                        name="totalKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Descripción</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Introduzca una descripción del producto"
                        name="descripcion">{{ $producto->descripcion }}</textarea>
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
                            {{ $producto->imagen }}
                            <img style="z-index:0" src="{{ asset('storage').'/'.$producto->imagen }}"
                                alt="Ilustración del producto">
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
                    <a href="{{ url('/inventario') }}" class="button is-link is-light">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
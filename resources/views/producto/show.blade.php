@extends('layouts.productosLayout')


@section('content')
<div class="container">
    <h1 class="title has-text-info">Detalles del producto {{ $producto->nombre}}</h1>
    @if (isset($mensaje))
        <div class="notification is-info">
            <button class="delete"></button>
            {{ $mensaje }}
        </div>
    @endif
    <div class="box">
        <div class="columns is-multiline">
            <div class="column is-one-third-desktop">
                <figure class="image is-1by1" style="position:relative">
                    <img style="z-index:0" src="{{ asset('storage').'/'.$producto->imagen }}"
                        alt="Ilustración del producto">
                </figure>
            </div>
            <div class="column">
                <div class="columns is-multiline">
                    <div class="column .is-4">
                        <p class="subtitle is-size-6 has-text-primary mb-1">Nombre del producto</p>
                        <p class="subtitle is-size-6">{{ $producto->nombre }}</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Etapa</p>
                        <p class="subtitle is-size-6">{{ $producto->etapa }}</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Categoría</p>
                        <p class="subtitle is-size-6">{{ $producto->categoria }}</p>
                    </div>
                    <div class="column is-4">
                        <p class="subtitle is-size-6 has-text-primary mb-1">Precio (Kg)</p>
                        <p class="subtitle is-size-6">$ {{ $producto->precioKg }}</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Existencia</p>
                        <p class="subtitle is-size-6">{{ $producto->totalSacos }}</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Marca</p>
                        <p class="subtitle is-size-6">{{ $producto->marca }}</p>
                    </div>

                    <div class="column is-4">
                        <p class="subtitle is-size-6 has-text-primary mb-1">Precio (Saco)</p>
                        <p class="subtitle is-size-6">$ {{ $producto->precioSaco }}</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Total Kilogramos</p>
                        <p class="subtitle is-size-6">{{ $producto->totalKg }} Kg</p>

                        <p class="subtitle is-size-6 has-text-primary mb-1">Tamaño del costal</p>
                        <p class="subtitle is-size-6">{{ $producto->peso }} Kg</p>
                    </div>

                    <div class="column is-full">
                        <p class="subtitle is-size-6 has-text-primary mb-1">Descripción</p>
                        <p class="subtitle is-size-6">{{ $producto->descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="botones is-flex is-justify-content-space-between">
        <form action="{{ url('/producto/'. $producto->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="button is-danger"
                onclick="return confirm('¿Realmente desea borrar este producto?')" value="Eliminar">
        </form>

        <div class="block">
            <a class="button is-info is-outlined mr-2" href="{{ url('/inventario') }}">Cancelar</a>
            <a class="button is-info" href="{{ url('producto/'. $producto->id. '/edit') }}">Editar</a>
        </div>


    </div>
</div>
@endsection
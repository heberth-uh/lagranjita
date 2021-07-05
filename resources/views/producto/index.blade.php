@extends('layouts.productosLayout')

@section('content')
<div class="encabezado is-flex is-justify-content-space-between">
    <h1 class="title is-3">Productos en Stock</h1>
    <a class="button is-primary" href="{{ url('/producto/create') }}">Agregar Producto</a>
</div>
<section class="">
    <div class="columns is-multiline m-0 is-2">

        @foreach ( $productos as $producto )
        <div class="column is-4-desktop is-6-tablet">

            <div class="card is-flex is-flex-direction-column">
                <div class="card-image">
                    <figure class="image is-1by1">
                        <img src="{{ asset('storage').'/'.$producto->imagen }}" alt="Ilustración del producto">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-5">{{ $producto->nombre }}</p>
                            @if(strlen($producto->decripcion) > 60)
                                <p class="subtitle is-6">{{ Str::limit($producto->descripcion, 20, '...'); }}</p>
                            @else
                                <p class="subtitle is-6">{{ $producto->descripcion }}</p>
                            @endif
                        <div class="existencia">
                            <progress class="progress is-small is-primary" value="{{ $producto->totalSacos * 100 / 20 }}" max="100">20%</progress>
                            
                        </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="columns is-1">
                            <div class="column is-half">

                                <div class="columns is-multiline is-gapless">
                                    <div class="column is-full">
                                        <p class="is-subtitle is-5">Saco</p>
                                    </div>
                                    <div class="column is-full">
                                        <p class="is-subtitle has-text-primary is-5">${{ $producto->precioSaco }}</p>
                                    </div>
                                    <div class="column is-three-quarters mt-2">
                                        <input class="input is-primary" type="text" placeholder="Cantidad">
                                    </div>
                                </div>

                            </div>
                            <div class="column is-half">
                            
                                <div class="columns is-multiline is-gapless">
                                    <div class="column is-full">
                                        <p class="is-subtitle is-5">Kilogramo</p>
                                    </div>
                                    <div class="column">
                                        <p class="is-subtitle has-text-primary is-5">${{ $producto->precioKg }}</p>
                                    </div>
                                    <div class="column is-three-quarters mt-2">
                                        <input class="input is-primary" type="text" placeholder="Cantidad">
                                    </div>
                                </div>

                            </div>
                        </div>
 
                    </div>

                    <div class="card-footer has-text-centered">
                        <button class="button is-primary is-medium is-fullwidth has-text-centered">Vender</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

    </div>

</section>

@endsection
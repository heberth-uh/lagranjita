<!-- @extends('layouts.productosLayout') -->
@extends('layouts.app')

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
                    <figure class="image is-1by1" style="position:relative">
                        @if($producto->categoria == 'pollo')
                            <span class="tag is-warning is-medium" style="position:absolute;right:0;">Pollo</span>
                        @elseif($producto->categoria == 'cerdo')
                            <span class="tag is-link is-medium" style="position:absolute;right:0;">Cerdo</span>
                        @elseif($producto->categoria == 'pavo')
                            <span class="tag is-success is-medium" style="position:absolute;right:0;">Pavo</span>
                        @elseif($producto->categoria == 'rumiantes')
                            <span class="tag is-danger is-medium" style="position:absolute;right:0;">Rumiantes</span>
                        @elseif($producto->categoria == 'cereales y maíz')
                            <span class="tag is-info is-medium" style="position:absolute;right:0;">Cereales y maíz</span>
                        @endif
                        <img style="z-index:0" src="{{ asset('storage').'/'.$producto->imagen }}" alt="Ilustración del producto">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-5">{{ $producto->nombre }}</p>
                            @if(strlen($producto->decripcion) > 60)
                                <p class="subtitle is-6">{{ Str::limit($producto->descripcion, 20, '...'); }} <a href="{{url('/producto/'.$producto->id ) }}">Detalles</a></p>
                            @else
                                <p class="subtitle is-6">{{ $producto->descripcion }} <a href="{{ url('/producto/'.$producto->id ) }}">Detalles</a></p>
                            @endif
                            
                        <div class="existencia">
                            <progress class="progress is-small is-primary mb-1" value="{{ $producto->totalSacos * 100 / 20 }}" max="100">20%</progress>
                            
                            <div class="indicadores is-flex is-justify-content-space-between">
                                <div class="existencia">
                                    <p class="is-subtitle is-size-6 mt-0">Existenia: {{ $producto->totalSacos }}</p>
                                </div>
                                <div class="porcentaje">
                                    <p class="is-subtitle is-size-6 mt-0">{{ $producto->totalSacos * 100 / 20 }}% Disponible</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="columns is-1">
                            <div class="column is-half">

                                <div class="columns is-multiline is-gapless">
                                    <div class="column is-full">
                                        <p class="is-subtitle is-size-5">Saco</p>
                                    </div>
                                    <div class="column is-full">
                                        <p class="is-subtitle has-text-primary is-size-5">${{ $producto->precioSaco }}</p>
                                    </div>
                                    <div class="column is-three-quarters mt-2">
                                        <input class="input is-primary" type="text" placeholder="Cantidad">
                                    </div>
                                </div>

                            </div>
                            <div class="column is-half">
                            
                                <div class="columns is-multiline is-gapless">
                                    <div class="column is-full">
                                        <p class="is-subtitle is-size-5">Kilogramo</p>
                                    </div>
                                    <div class="column">
                                        <p class="is-subtitle has-text-primary is-size-5">${{ $producto->precioKg }}</p>
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
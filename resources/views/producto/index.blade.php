@extends('layouts.productosLayout')


@section('content')
<div class="encabezado is-flex is-justify-content-space-between mb-5">
    <h1 class="title has-text-info">Productos en Stock</h1>
    <!-- <a class="button is-primary" href="{{ url('/producto/create') }}">Agregar Producto</a> -->
</div>

@if(Session::has('mensaje'))
<div class="notification is-info">
    <button class="delete"></button>
    {{ Session::get('mensaje')}}
</div>
@endif

<section class="contenido-stock">
    <div class="columns is-multiline is-1">
        @foreach ( $productos as $producto )
            @if( $producto -> totalSacos > 0)
                <div class="column is-4-desktop is-6-tablet">

                    <div class="card is-flex is-flex-direction-column is-justify-content-space-between" style='height:100%'>
                        <div class="card-image">
                            <figure class="image is-1by1" style="position:relative">
                                @if($producto->categoria == 'pollo')
                                <span class="tag is-warning is-small" style="position:absolute;right:0;">Pollo</span>
                                @elseif($producto->categoria == 'cerdo')
                                <span class="tag is-link is-small" style="position:absolute;right:0;">Cerdo</span>
                                @elseif($producto->categoria == 'pavo')
                                <span class="tag is-success is-small" style="position:absolute;right:0;">Pavo</span>
                                @elseif($producto->categoria == 'rumiantes')
                                <span class="tag is-danger is-small" style="position:absolute;right:0;">Rumiantes</span>
                                @elseif($producto->categoria == 'cereales y maíz')
                                <span class="tag is-info is-small" style="position:absolute;right:0;">Cereales y maíz</span>
                                @endif
                                <img style="z-index:0" src="{{ asset('storage').'/'.$producto->imagen }}"
                                    alt="Ilustración del producto">
                            </figure>
                        </div>
                        <div class="card-content p-3">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-6">{{ $producto->nombre }}</p>

                                    <p class="subtitle is-6">{{ $producto->descripcionPreview }} <a
                                            href="{{ url('/producto/'.$producto->id ) }}">Detalles</a></p>


                                    <div class="existencia">
                                        @if($producto->totalSacos == 0)
                                        <p>Inactivo</p>
                                        @elseif(($producto->totalSacos * 100/20) < 30) <p>{{$producto->totalSacos * 100/20}}</p>
                                            <progress class="progress is-small is-danger mb-1"
                                                value="{{ $producto->totalSacos * 100 / 20 }}" max="100"></progress>
                                            @elseif(($producto->totalSacos * 100/20) < 60) <p>{{$producto->totalSacos * 100/20}}
                                                </p>
                                                <progress class="progress is-small is-warning mb-1"
                                                    value="{{ $producto->totalSacos * 100 / 20 }}" max="100"></progress>
                                                @elseif(($producto->totalSacos * 100/20) < 100 ) <p>
                                                    {{$producto->totalSacos * 100/20}}</p>
                                                    <progress class="progress is-small is-primary mb-1"
                                                        value="{{ $producto->totalSacos * 100 / 20 }}" max="100"></progress>
                                                    @endif
                                                    <!-- <progress class="progress is-small is-primary mb-1"
                                            value="{{ $producto->totalSacos * 100 / 20 }}" max="100"></progress> -->

                                                    <div class="indicadores is-flex is-justify-content-space-between">
                                                        <div class="existencia">
                                                            <p class="is-subtitle is-size-7 mt-0">Existencia:
                                                                {{ $producto->totalSacos }}</p>
                                                        </div>
                                                        <div class="porcentaje">
                                                            <p class="is-subtitle is-size-7 mt-0">
                                                                {{ $producto->totalSacos * 100 / 20 }}%
                                                                Disponible</p>
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
                                                <p class="is-subtitle is-size-6">Saco</p>
                                            </div>
                                            <div class="column is-full">
                                                <p class="is-subtitle has-text-primary is-size-6">$ {{ $producto->precioSaco }}
                                                </p>
                                            </div>
                                            <div class="column is-three-quarters mt-2">
                                                <input class="input is-primary is-size-7" type="text" placeholder="Cantidad">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="column is-half">

                                        <div class="columns is-multiline is-gapless">
                                            <div class="column is-full">
                                                <p class="is-subtitle is-size-6">Kilogramo</p>
                                            </div>
                                            <div class="column">
                                                <p class="is-subtitle has-text-primary is-size-6">$ {{ $producto->precioKg }}
                                                </p>
                                            </div>
                                            <div class="column is-three-quarters mt-2">
                                                <input class="input is-primary is-size-7" type="text" placeholder="Cantidad">
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
            @endif
        @endforeach
    </div>

</section>

@endsection
@extends('layouts.productosLayout')


@section('content')
<div class="encabezado is-flex is-justify-content-space-between">
    <h1 class="title has-text-info">Inventario</h1>
    <a class="button is-primary" href="{{ url('/producto/create') }}">Agregar Producto</a>
</div>

@if(Session::has('mensaje'))
<div class="notification is-info">
    <button class="delete"></button>
    {{ Session::get('mensaje')}}
</div>
@endif

<section class="">
    <div class="columns is-multiline is-2">


        <div class="column is-full-desktop is-6-tablet">
            <table class="table">
                <thead>
                    <tr>
                        <th><abbr title="Position">id</abbr></th>
                        <th>Nombre del producto</th>
                        <th><abbr title="Position">Tipo</abbr></th>
                        <th><abbr title="Position">Precio costal</abbr></th>
                        <th><abbr title="Position">Precio unitario</abbr></th>
                        <th><abbr title="Position">Costales</abbr></th>
                        <th><abbr title="Position">Peso</abbr></th>
                        <th><abbr title="Position">Estado</abbr></th>
                        <th><abbr title="Position">Acciones</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $productos as $producto )
                    <tr>
                        <th><p class="subtitle is-size-6">{{ $producto->id }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->nombre }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->categoria }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->precioSaco }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->precioKg }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->totalSacos }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->totalSacos }}</p></th>
                        <th><p class="subtitle is-size-6">{{ $producto->totalSacos }}</p></th>
                        <th>
                            <div class="buttons is-flex is-justify-content-space-between	">
                                <div class="buttons is-flex is-justify-content-end is-justify-content-right">
                                    <a class="button is-primary is-small"
                                        href="{{url('/producto/'.$producto->id ) }}">Detalles</a>
                                    <a class="button is-warning is-small"
                                        href="{{ url('producto/'. $producto->id. '/edit') }}">Editar</a>

                                    <form action="{{ url('/producto/'. $producto->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="button is-danger is-small"
                                            onclick="return confirm('¿Realmente desea borrar este producto?')"
                                            value="Eliminar">
                                    </form>

                                </div>
                            </div>
                        </th>


                    </tr>
                    @endforeach
                </tbody>


            </table>


        </div>


    </div>

</section>

@endsection
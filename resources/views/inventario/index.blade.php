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
    <div class="columns is-multiline m-0 is-2">

        
        <div class="column is-4-desktop is-6-tablet">
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
                        <th>{{ $producto->id }}</th>
                        <th>{{ $producto->nombre }}</th>
                        <th>{{ $producto->categoria }}</th>
                        <th>{{ $producto->precioSaco }}</th>
                        <th>{{ $producto->precioKg }}</th>
                        <th>{{ $producto->totalSacos }}</th> 
                        <th>{{ $producto->totalSacos }}</th>
                        <th>{{ $producto->totalSacos }}</th>
                        <th>
                        <div class="buttons ">
                <div class="buttons is-flex is-justify-content-end is-justify-content-right">
                <a class="button is-primary" href="{{url('/producto/'.$producto->id ) }}">Detalles</a>
                    <a class="button is-warning" href="{{ url('producto/'. $producto->id. '/edit') }}">Editar</a>

                    <form action="{{ url('/producto/'. $producto->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="button is-danger"
                            onclick="return confirm('¿Realmente desea borrar este producto?')" value="Eliminar">
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
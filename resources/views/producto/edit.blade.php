@extends('layouts.productosLayout')

@section('content')
<div class="contianer">
    <h1 class="title has-text-info">Editar "{{ $producto->nombre}}"</h1>
    <div class="box">
        <form action="{{ url('/producto/' .$producto->id ) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('producto.form');
        </form>
    </div>
</div>
@endsection
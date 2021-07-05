@extends('layouts.productosLayout')

@section('content')
<div class="container m-3">
    <h1 class="title has-text-info">Agregar un nuevo producto</h1>
    <div class="box">
        <form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @include('producto.form')
        </form>
    </div>

</div>
@endsection
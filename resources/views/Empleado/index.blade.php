<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita</title>
    <link rel="stylesheet" href="../../css/mystyles.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png"
                    alt="Bulma: Free, open source, and modern CSS framework based on Flexbox" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    </nav>
    <div class="container is-fullhd my-6">
        <div class="encabezado is-flex is-justify-content-space-between">
            <h1 class="title is-3">Empleados</h1>
            <a class="button is-primary" href="{{ url('/empleado/create') }}">Agregar Empleado</a>
        </div>
        <div class="columns is-multiline m-0 is-2">

                @foreach ( $empleados as $empleado )
                <div class="column is-4-desktop is-6-tablet">

                    <div class="card is-flex is-flex-direction-column">
                        <div class="card-image">
                            <figure class="image is-128x128">
                                <img  class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}" alt="Ilustración del empleado"> -->
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <label class="is-size-5">Nombre:</label>
                                    <p class="title is-5">{{ $empleado->Nombre }}</p>
                                    <label class="is-size-5">Apellido Paterno:</label>
                                    <p class="title is-5">{{ $empleado->ApellidoPaterno }}</p>
                                    <label class="is-size-5">Apellido Materno:</label>
                                    <p class="title is-5">{{ $empleado->ApellidoMaterno }}</p>
                                    <label class="is-size-5">Correo:</label>
                                    <p class="title is-5">{{ $empleado->Correo}}</p>
                                    <label class="is-size-5">Telefono:</label>
                                    <p class="title is-5">{{ $empleado->Telefono }}</p>
                                    <label class="is-size-5">Turno:</label>
                                    <p class="title is-5">{{ $empleado->Turno }}</p>
                                    
                                </div>
            
                            </div>
                            <div class="card-footer has-text-centered">
                                <button class="button is-warning  has-text-centered">Editar</a>
                                
                                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="button is-danger has-text-centered" onclick ="return confirm('¿Quieres borrar al empleado)">Eliminar</a>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>


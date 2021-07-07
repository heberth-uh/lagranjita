<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita</title>
    <link rel="stylesheet" href="../../css/mystyles.css">
    <script src="https://kit.fontawesome.com/3176d7a66a.js" crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });
    </script>
</head>

<body>
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="container is-fullhd">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{url('/producto/')}}">
                    <h1 class="title is-4 has-text-primary">LaGranjita</h1>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">

                <div class="navbar-end">

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <a class="navbar-item" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                    @endif

                    @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                    @endif
                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon has-text-info mr-1">
                                <i class="fas fa-user-circle"></i>
                            </span>

                            {{ Auth::user()->name }}
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                    @endguest
                </div>

            </div>
        </div>
    </nav>


    <div class="container is-fullhd my-6">
        <div class="columns">
            <div class="column is-2-desktop is-hidden-tablet-only has-background-white ">

                <aside class="menu ">
                    <p class="menu-label has-text-primary">
                        Menú
                    </p>
                    <ul class="menu-list">
                        <li><a class="has-text-primary" href="{{ url('/home') }}">
                                <span class="icon has-text-primary">
                                    <i class="fas fa-home"></i>
                                </span>Inicio</a></li>
                        <li><a class="has-text-primary">
                                <span class="icon has-text-primary">
                                    <i class="fas fa-cash-register"></i>
                                </span>Corte de caja</a></li>
                        <div class="px-4 my-0">
                            <hr class="has-background-primary">
                        </div>
                        <li><a class="has-text-primary">
                                <span class="icon has-text-primary">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>Registro de ventas</a></li>
                        <li><a class="has-text-primary" href=" {{ url('/inventario') }} ">
                                <span class="icon has-text-primary">
                                    <i class="fas fa-list-alt"></i>
                                </span>Gestionar inventario</a></li>
                        <li><a class="has-text-primary" href=" {{ url('/empleado') }} ">
                                <span class="icon has-text-primary">
                                    <i class="fas fa-user-cog"></i>
                                </span>Gestionar empleados</a></li>

                    </ul>
                </aside>
            </div>

            <div class="column is-8-desktop is-9-tablet mx-2">
                @yield('content')
            </div>

            <div class="column is-2-desktop">
            </div>
        </div>
    </div>

</body>

</html>
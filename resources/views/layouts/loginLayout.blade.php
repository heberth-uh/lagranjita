<!DOCTYPE html>
<html lang="en" class="645has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita</title>
    <link rel="stylesheet" href="../../css/mystyles.css">
    <script src="https://kit.fontawesome.com/3176d7a66a.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="box-shadow: 0 1px 4px #ccc;">
        <div class="container is-fullwidth">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{url('/producto/')}}">
                    <h1 class="title is-4 has-text-primary">LaGranjita</h1>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">

                <div class="navbar-end">

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <a class="navbar-item is-hidden" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                    @endif

                    @if (Route::has('register'))
                    <a class="navbar-item is-hidden" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                    @endif
                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
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

    <section class="contenido-login" id="contenido_login">
        <div class="">
            @yield('content')
        </div>
    </section>

</body>

</html>
@extends('layouts.loginLayout')


</head>
<!-- <figure class="image is-3by1 ">
    <img src="/../../../public/login.jpg" alt="imagen de referencia">
</figure> -->
@section('content')
<section class="hero is-fullheight has-background-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-4-widescreen is-8-mobile">
                    
                    <div class="card">
                        <div class="card-header card-header-title ">
                            {{ __('Login') }}
                        </div>

                        <div class="card-content">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="field">
                                    <label for="email" class="label">{{ __('Correo') }}</label>

                                    <div class="control has-icons-left ">
                                        <input id="email" type="email"
                                            class="input is-link  @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <span class="icon  is-small is-left">
                                            <i class="fas fa-envelope "></i>
                                        </span>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="password" class="label">{{ __('Contraseña') }}</label>

                                    <div class="control control has-icons-left">
                                        <input id="password" type="password"
                                            class="input is-link @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <div class="checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
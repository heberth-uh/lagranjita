@extends('layouts.productosLayout')

@section('content')
<section class="hero  is-fullheight">
<div class="hero-body">
<div class="container ">
<div class="columns is-centered">
<div class="column is-5-tablet is-4-desktop is-3-widescreen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-title ">{{ __('Login') }}</div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control has-icons-left ">
                                <input id="email" type="email" class="input is-link  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="control control has-icons-left">
                                <input id="password" type="password" class="input is-link @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-link">
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
</div>
</div>
</section>
@endsection

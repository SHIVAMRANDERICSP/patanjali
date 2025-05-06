@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_body')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Field -->
    <div class="input-group mb-3">
        <input id="email" type="email" name="email"
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}"
            placeholder="{{ __('Email') }}" required autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" style="display: block;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Field -->
    <div class="input-group mb-3">
        <input id="password" type="password" name="password"
            class="form-control @error('password') is-invalid @enderror"
            placeholder="{{ __('Password') }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" style="display: block;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
        </div>
    </div>
</form>
@endsection

@section('auth_footer')
<p class="mb-0">
    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    @endif
</p>
@endsection
@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@section('auth_body')
@if (session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('error') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    <!-- Name -->
    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="{{ __('Full Name') }}" required autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>

    <!-- Email -->
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>

    <!-- Password -->
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <!-- Confirm Password -->
    <div class="input-group mb-3">
        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="row">
        <div class="col-4 offset-8">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
        </div>
    </div>
</form>
@endsection
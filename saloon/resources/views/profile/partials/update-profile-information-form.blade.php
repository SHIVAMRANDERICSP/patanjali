<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">{{ __('Profile Information') }}</h3>
    </div>
    <div class="card-body">
        <p class="text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                <div class="text-danger mt-1">@error('name') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                <div class="text-danger mt-1">@error('email') {{ $message }} @enderror</div>

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-warning">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link p-0">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="text-success">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                @if (session('status') === 'profile-updated')
                <p class="text-success small mb-0">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</div>
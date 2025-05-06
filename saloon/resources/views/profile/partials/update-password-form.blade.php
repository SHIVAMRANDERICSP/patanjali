<div class="card shadow-sm border-0">
    <div class="card-header bg-warning text-white">
        <h3 class="card-title">{{ __('Update Password') }}</h3>
    </div>
    <div class="card-body">
        <p class="text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}" class="mt-4">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" required>
                <div class="text-danger mt-1">@error('current_password') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" required>
                <div class="text-danger mt-1">@error('password') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
                <div class="text-danger mt-1">@error('password_confirmation') {{ $message }} @enderror</div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-warning">{{ __('Save') }}</button>
                @if (session('status') === 'password-updated')
                <p class="text-success small mb-0">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</div>
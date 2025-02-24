@seoTitle(__('Log in'))

<x-authentication-card>
    <x-slot:logo>
        <x-authentication-card-logo />
    </x-slot>

    @if ($status = session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ $status }}
        </div>
    @endif

    <x-splade-form class="space-y-4">
        <x-splade-input id="email" name="email" type="email" :label="__('Email')" required autofocus />
        <x-splade-input id="password" name="password" type="password" :label="__('Password')" required autocomplete="current-password" />
        <x-splade-checkbox name="remember">{{ __('Remember me') }}</x-splade-checkbox>

        <div class="mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <Link
                    href="{{ route('password.request') }}"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2"
                >
                    {{ __('Forgot your password?') }}
                </Link>
            @endif

            <x-splade-submit :label="__('Log in')" class="ml-4" />
        </div>
    </x-splade-form>
</x-authentication-card>

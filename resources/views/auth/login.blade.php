@section('title', 'Inicias Sesión')
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="form-group mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="checkout__input__checkbox mt-4">
                <label for="remember_me" class="form-check-label">
                    <x-checkbox id="remember_me" name="remember" class="" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-gray-600" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu Contraseña?') }}
                    </a>
                @endif

                <x-button class="">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

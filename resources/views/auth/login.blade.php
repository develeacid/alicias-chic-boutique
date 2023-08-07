<x-guest-layout>
    <x-authentication-card>
    <section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <img class="img-fluid" src="img/logo.png" alt="Imagen Responsiva">
                <div class="contact__form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Iniciar Sesión</h4>
                            </div>
                            <div class="col-lg-12">
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Correo" required autofocus autocomplete="username" />
                            </div>
                            <div class="col-lg-12">
                                <input id="password" class="form-control" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password" />
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__input__checkbox">
                                    <label for="diff-acc">
                                        {{ __('Recordarme') }}
                                        <input type="checkbox" id="diff-acc" name="remember" type="checkbox" class="form-check-input">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="site-btn">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    </x-authentication-card>
</x-guest-layout>




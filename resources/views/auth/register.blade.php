<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>

<body>

    <header class="welcome-header">
        <img src="{{ asset('img/logos/logo.png') }}" alt="">
        <h1 class="welcome-header-h1">Universidad Territorial Deltaica Francisco Tamayo</h1>

    </header>
    <nav class="welcome-header-nav">
        <a class="welcome-header-nav-a" href="">Inicio</a>
        <a class="welcome-header-nav-a" href="">Oferta Universitaria</a>
        <a class="welcome-header-nav-a" href="">Correo de la Universidad</a>
        <a class="welcome-header-nav-a" href="">Mas</a>
    </nav>
    <main>

        <section class="welcome-section-1">

            <div class="register-online-container">
                <h2 class="register-online-h2">Solicitud de Inscripcion en Linea</h2>
                <form class="register-online-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="register-n-a">
                        <div class="register-n">

                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name" required
                                autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="register-n">

                            <label for="name" class="col-md-4 col-form-label text-md-end">Apellido</label>

                            <input id="last_name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name" required
                                autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="register-n">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-n">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-n">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>




        </section>


    </main>
    <footer class="welcome-footer">
        <p>Hecho en Venezuela, Universidad Territorial Deltaica Francisco Tamayo, todos los derechos reservados 202#.
            Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente
            completa y su dirección electrónica.
            De otra forma, requiere permiso previo por escrito de la institución.</p>
    </footer>


    <script>
        var login_btn = document.getElementById('loginbtn');
        var login_form = document.getElementById('loginform');
        var the_login_form = document.getElementById('theloginform');
        var loginx = document.getElementById('loginx');


        var showthelogin = function() {
            the_login_form.style.transform = 'translateY(0vh)';
            the_login_form.style.transition = '0.7s';
        }

        var showlogin = function() {
            login_form.style.display = 'flex';
            setTimeout(showthelogin, 50);
        }

        var hiddenlogin = function() {
            login_form.style.display = 'none';
        }


        login_btn.addEventListener('click', showlogin);
        loginx.addEventListener('click', hiddenlogin);

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                var elemento = document.getElementById(
                    'loginform');
                elemento.style.display = 'none';
            }
        });
    </script>
</body>

</html>

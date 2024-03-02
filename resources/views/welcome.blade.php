<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>

<body>

    <div class="welcome-the-login-container" id="loginform">
        <button class="welcome-the-login-x" id="loginx">&#10006</button>

        <form action="{{ route('login') }}" method="POST" id="theloginform" class="welcome-the-login-form">
            @csrf
            <h3 class="welcome-the-login-h3">Acceso Estudiantes y Docentes</h3>
            @error('cedula')
                <span class="welcome-the-login-error" style="font-size:13px; color:red;">Credenciales invalidas</span><br>
            @enderror

            <input name="cedula" id="cedula" class="welcome-the-login-input" type="number" min="1000000"
                placeholder="Cedula">
            @error('passowrd')
                <span class="welcome-the-login-error" style="font-size:13px">Credenciales invalidas</span><br>
            @enderror
            <input name="password" id="password" class="welcome-the-login-input" type="password"
                placeholder="Contraseña">
            <a href="" class="welcome-the-login-a">Olvidaste tu contraseña?</a>
            <button type="submit" class="welcome-the-login-btn">Ingresar</button>
        </form>

    </div>

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
            <div class="slider-box">
                <div>
                    <h2>Universidad del pueblo para el pueblo</h2>
                </div>
                <ul>

                    <li><img src="{{ asset('img/welcome-slider/1.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/2.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/3.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/4.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/5.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/6.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('img/welcome-slider/7.jpg') }}" alt=""></li>
                </ul>
            </div>

            <div class="welcome-login-container">
                <div class="welcome-login">
                    <button class="welcome-login-a" id="loginbtn" href="">
                        <h3 class="welcome-login-a-h3">UTD en Linea</h3>
                        <p class="welcome-login-a-p">Gestiona tus horarios, clases, acreditablle a traves de nuestro
                            nuevo sistema en linea</p>
                    </button>
                </div>

                <div class="welcome-login">
                    <button class="welcome-login-a" href="">
                        <h3 class="welcome-login-a-h3">SRCTI</h3>
                        <p class="welcome-login-a-p">Sistema de Registro y Control de Trabajos de Investigacion</p>
                    </button>
                </div>

                <div class="welcome-login">
                    <button class="welcome-login-a" href="">
                        <h3 class="welcome-login-a-h3">Foro UTDeltaica</h3>
                        <p class="welcome-login-a-p">Foro de la universiadad</p>
                    </button>
                </div>

                <div class="welcome-login">
                    <button class="welcome-login-a" href="">
                        <h3 class="welcome-login-a-h3">Solicitudes en Linea</h3>
                        <p class="welcome-login-a-p">Envia tu solicitud de inscripcion</p>
                    </button>
                </div>

            </div>



        </section>

        <section class="stadisticas">
            <div>
                <h4>{{ $students->count() }}</h4>
                <p>Estudiantes</p>
            </div>
            <div>
                <h4>{{ $professors->count() }}</h4>
                <p>Profesores</p>
            </div>
            <div>
                <h4>{{ $pnfs->count() }}</h4>
                <p>Carreras</p>
            </div>
        </section>


        <div class="welcome-noticias">
            <h1>Noticias e Informacion <span></span></h1>
            <div class="noticias_container">
                <div class="noticias_cocontainer">
                    @foreach ($noticias as $noticia)
                        <a href="{{ route('noticia', $noticia) }}" class="welcome-noticia">
                            <div class="img">
                                <img src="{{ $noticia->image_name }}" alt="">
                            </div>
                            <h4>{{ $noticia->titulo }}</h4>
                            <p>{{ $noticia->descripcion }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
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

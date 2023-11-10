<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
</head>
<body>

	<div class="welcome-the-login-container" id="loginform">
		<form action="{{route('login')}}" method="POST" class="welcome-the-login-form" >
            @csrf
			<button class="welcome-the-login-x" id="loginx">x</button>
			<h3 class="welcome-the-login-h3"> Ingresa al Sistema</h3>
			<input name="cedula" id="cedula" class="welcome-the-login-input" type="number" min="1000000" placeholder="Cedula">
			<input name="password" id="password" class="welcome-the-login-input" type="password" placeholder="Contraseña">
			<a href="" class="welcome-the-login-a">Olvidaste tu contraseña?</a>
			<button type="submit" class="welcome-the-login-btn">Ingresar</button>
		</form>
		
	</div>

	<header class="welcome-header">
		<h1 class="welcome-header-h1">Universidad Territorial Deltaica Francisco Tamayo</h1>
		
	</header>
	<nav class="welcome-header-nav">
			<a class="welcome-header-nav-a" href="">Inicio</a>
			<a class="welcome-header-nav-a" href="">Oferta Universitaria</a>
			<a class="welcome-header-nav-a" href="">Correo de la Universidad</a>
			<a class="welcome-header-nav-a" href="">Mas</a>
		</nav>
	<main>
		<div class="welcome-carrusel">
			<img class="welcome-carrusel-img" src="UTD-696x381.jpg" alt="">
		</div>

		<div class="welcome-login-container">
			<div class="welcome-login1">
				<button class="welcome-login-a1" id="loginbtn" href="">
				<h3 class="welcome-login-a-h31">UTD en Linea</h3>
				<span class="welcome-login-a-span11"></span>	
				<span class="welcome-login-a-span21"></span>	
				<span class="welcome-login-a-span31"></span>	
				<p class="welcome-login-a-p1">Gestiona tus horarios, clases, acreditablle a traves de nuestro nuevo sistema en linea</p>				
				</button>
			</div>

			<div class="welcome-login">
				<a class="welcome-login-a" href="">
				<h3 class="welcome-login-a-h3">SRCTI</h3>

				<p class="welcome-login-a-p">Sistema de Registro y Control de Trabajos de Investigacion</p>				
				</a>
			</div>

			
			
		</div>

	

		<div class="welcome-noticias">
			<h1 class="welcome-noticias-h1">Noticias</h1>
			<span class="welcome-noticias-span"></span>
			<div class="welcome-noticias-container">
				<div class="welcome-noticias-img"></div>
				<ul class="welcome-noticias-ul">
					<li class="welcome-noticias-ul-li"><a href="">Noticia 1</a></li>
					<li class="welcome-noticias-ul-li"><a href="">Noticia 2</a></li>
					<li class="welcome-noticias-ul-li"><a href="">Noticia 3</a></li>
					<li class="welcome-noticias-ul-li"><a href="">Noticia 4</a></li>
					<li class="welcome-noticias-ul-li"><a href="">Noticia 5</a></li>
				</ul>
			</div>
		</div>
	</main>
	<footer class="welcome-footer">
		<p>Hecho en Venezuela, Universidad Territorial Deltaica Francisco Tamayo, todos los derechos reservados 202#.
Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica.
De otra forma, requiere permiso previo por escrito de la institución.</p>
	</footer>


	<script>
		var login_btn = document.getElementById('loginbtn');
		var login_form = document.getElementById('loginform');
		var loginx = document.getElementById('loginx');

		var showlogin = function() {
		 	login_form.style.display = 'flex';
		 }

		var hiddenlogin = function(){
		 	login_form.style.display = 'none';
		}

		login_btn.addEventListener('click', showlogin);
		loginx.addEventListener('click', hiddenlogin);
	</script>
</body>
</html>
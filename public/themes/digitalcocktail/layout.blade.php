<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@include(theme_view("inc.facebookcomments"))
@include("templates/default/partials/header")

	<section class="blog">
		<aside class="aside-blog">
			<div class="buscador-aside">
				<form role="formulario">
					<input type="text" id="buscador-aside">	
					<button type="submit">Buscar</button>				
				</form>
			</div>
			<div class="etiquetas-aside">
				<h3>Etiquetas</h3>
				<a href="#" class="etiqueta">web</a>
				<a href="#" class="etiqueta">web</a>
				<a href="#" class="etiqueta">web</a>
			</div>
			<div class="suscribete-aside">
				<h3>Suscríbete y recibe los últimos artículos en tu correo</h3>
				<label for="mail-suscripcion"><input type="checkbox">Antes de suscribirte debes estar de acuerdo con nuestra <a href="#">Política de manejo de datos</a></label>
				<input type="mail" id="mail-suscripcion" placeholder="Ingresa tu correo">
				<button type="submit">Evniar</button>
			</div>
		</aside><!-- Fin del aside -->
		@yield('content')
		<div class="ver-mas-blog">
			<a href="#" class="btn-ver-mas-blog">Ver más articulos</a>
		</div><!-- Fin botón Ver más artículos -->
	</section><!-- Fin del contenedor de los articulos - blog -->

@include("templates/default/partials/footer")
</body>
</html>

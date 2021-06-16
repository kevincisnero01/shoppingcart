<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="utf8">
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
</head>	
<body>
	<div class="container-fluid">
		<div class="row">
		<nav class="navbar navbar-default" id="menu">
			<div class="container-fluid">
			<div class="navbar-header">
				<span class="navbar-brand">
					<span class="glyphicon glyphicon-star"></span>
					{{ config('app.name') }}
				</span>
			</div>

			<ul class="nav navbar-nav">
				<li><a href="{{ route('welcome') }}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="{{ route('products.index') }}"><span class="glyphicon glyphicon-th"></span> Productos</a></li>
				<li><a href="{{ route('catalogs.index') }}"><span class="glyphicon glyphicon-list"></span> Catalogo</a></li>
				<li><a href="{{ route('carts.index') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
				<li><a href="{{ route('orders.index') }}"><span class="glyphicon glyphicon-send"></span> Pedidos</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right"  id="menu_profile">
				<li class="dropdown" >

				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
				  	<div id="test">
				  		<span class="glyphicon glyphicon-user"></span>
				  		Usuario Admin 
				  		<span class="caret pull-right"></span>
				  	</div>
				  </a>

				  <ul class="dropdown-menu">
				    <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Perfil</a></li>
				    <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Configuracion</a></li>
				    <li><a href="#"><span class="glyphicon glyphicon-share"></span> Cerrar Sesion</a></li>
				  </ul>

				</li>
			</ul>
			</div><!-- /.container-fluid -->
		</nav><!-- nav -->
		</div><!-- .row-->

		@yield('content')
	</div><!--.conteiner-->
</body>
<script type="text/javascript" src="{{ asset('plugins/jquery-3.3.1-dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
<script>
	//Componente Tooltip.js de bootstrap
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>
</html>



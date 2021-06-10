@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>AGREGAR PRODUCTO</h1>

	<form method="POST" action="{{route('cart.store')}}">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	  <label for="id">ID</label>
	  <input type="text"  class="form-control" name="id" id="id">
	</div>
	<div class="form-group">
	  <label for="name">NOMBRE</label>
	  <input type="text"  class="form-control" name="name" id="name">
	</div>
	<div class="form-group">
	  <label for="price">PRECIO</label>
	  <input type="text"  class="form-control" name="price" id="price">
	</div>
	<div class="form-group">
	  <label for="quantity">CANTIDAD</label>
	  <input type="text"  class="form-control" name="quantity" id="quantity">
	</div>
	<div class="form-group">
	  <label for="color">COLOR</label>
	  <select class="form-control" name="color" id="color">
	  	  <option value="">Seleccione</option>
	      <option value="white">blanco</option>
	      <option value="black"> negro</option>
	      <option value="blue"> azul</option>
	      <option value="red"> rojo</option>
	      <option value="green"> verde</option>
	  </select>
	  <small class="form-text text-muted">Atributo</small>
	</div>

	<div class="form-group">
	  <label for="tamano">TAMAÑO</label>
	  <select class="form-control" name="size" id="tamano">
	  	  <option value="">Seleccione</option>
	      <option value="small">Pequeño</option>
	      <option value="medium">Mediano</option>
	      <option value="big">Grande</option>
	  </select>
	  <small class="form-text text-muted">Atributo</small>
	</div>
	<button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>
</div><!--col-->
</div><!-- row-->
@endsection


@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>ACTUALIZAR PRODUCTO</h1>
	<div class="form-group">
	  <label for="quantity">CANTIDAD</label> <spand class="label label-default">Actual:{{ $item->quantity }} </spand>
	  <input type="text"  class="form-control" id="quantity" name="quantity" value="">
	  <small class="form-text text-muted">¿Que cantidad desea sumar o restar a la actual?</small>
	</div>
	<hr>
	<form method="POST" action="{{route('cart.update', ['cart' => $item->id]) }}">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <input type="hidden" name="_method" value="PUT">

	<div class="form-group">
	  <label for="name">NOMBRE</label>
	  <input type="text" name="name" class="form-control" id="name" value="{{ $item->name }}">
	</div>
	<div class="form-group">
	  <label for="price">PRECIO</label>
	  <input type="text" name="price" class="form-control" id="price" value="{{ $item->price }}">
	</div>
	
	<div class="form-group">
	  <label for="color">COLOR</label>
	  <select class="form-control" name="color" id="color">
	  	  <option value="">Seleccione</option>
	      <option value="white" @if($item->attributes->color == 'white') selected='selected' @endif >blanco</option>
	      <option value="black" @php if($item->attributes->color == 'black') echo "selected='selected'" @endphp > negro</option>
	      <option value="blue" @if($item->attributes->color == 'blue') selected='selected' @endif > azul</option>
	      <option value="red" @if($item->attributes->color == 'red') selected='selected' @endif > rojo</option>
	      <option value="green" @if($item->attributes->color == 'green') selected='selected' @endif > verde</option>
	  </select>
	  <small class="form-text text-muted">Atributo</small>
	</div>

	<div class="form-group">
	  <label for="tamano">TAMAÑO</label>
	  <select  class="form-control" name="size" id="tamano">
	  	  <option value="">Seleccione</option>
	      <option value="small" @if($item->attributes->size == 'small') selected='selected' @endif >Pequeño</option>
	      <option value="medium" @if($item->attributes->size == 'medium') selected='selected' @endif >Mediano</option>
	      <option value="big" @if($item->attributes->size == 'big') selected='selected' @endif >Grande</option>
	  </select>
	  <small class="form-text text-muted">Atributo</small>
	</div>
	

	<button type="submit" class="btn btn-primary">Guardar Cambios</button>
	</form>
</div><!--col-->
</div><!-- row-->
@endsection


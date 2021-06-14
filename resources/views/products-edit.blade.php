@extends('layouts.app')
@section('content')
<div class="row">
	<h1 class="text-center">ACTUALIZACION DE PRODUCTO</h1>
<div class="col-md-4 col-md-offset-4">

	<form method="POST" action="{{ route('products.update',['id' => $product->id]) }}">

	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <input type="hidden" name="_method" value="PUT">


	<div class="form-group">
	  <label for="name">NOMBRE</label>
	  <input type="text"  class="form-control" id="name" name="name" value="{{ $product->name }}" required>
	</div>
	<div class="form-group">
	  <label for="description">DESCRIPCIÓN</label>
	  <textarea class="form-control" id="description" name="description"  required>{{ $product->description }}</textarea>
	</div>
	<div class="form-group">
	  <label for="price">PRECIO</label>
	  <input type="text"  class="form-control" id="price" name="price" value="{{ $product->price }}" required>
	</div>
	<div class="form-group">
	  <label for="quantity">CANTIDAD</label>
	  <input type="text"  class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
	</div>

	<div class="form-group">
	  <label for="status">ESTATUS</label>
	  	<select class="form-control" id="status" name="status" required>
	  		<option value="0" >Seleccione</option>
	  		<option value="1" @if($product->status == 1) selected @endif >ACTIVO</option>
	  		<option value="0" @if($product->status == 0) selected @endif >INACTIVO</option>
	  	</select>
	</div>

	<button type="submit" class="btn btn-block btn-success">ACTUALIZAR</button>
	</form>
	
	@if($errors->any())
		<br>
		<div class="alert alert-danger">
			<p><b>¡Algo salio mal!</b></p>
			<ul>
				@foreach($errors->all() as $error)
				<li class="">{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
</div><!--col-->
</div><!-- row-->

@endsection


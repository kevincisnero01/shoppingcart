@extends('layouts.app')
@section('content')
<div class="row">
	<h1 class="text-center">REGISTRO DE PRODUCTO</h1>
<div class="col-md-4 col-md-offset-4">

	<form method="POST" action="{{ route('products.store') }}">

	  <input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	  <label for="name">NOMBRE</label>
	  <input type="text"  class="form-control" id="name" name="name" required>
	</div>
	<div class="form-group">
	  <label for="description">DESCRIPCIÓN</label>
	  <textarea class="form-control" id="description" name="description" required></textarea>
	</div>
	<div class="form-group">
	  <label for="price">PRECIO</label>
	  <input type="text"  class="form-control" id="price" name="price" required>
	</div>
	<div class="form-group">
	  <label for="quantity">CANTIDAD</label>
	  <input type="text"  class="form-control" id="quantity" name="quantity" required>
	</div>
	<div class="form-group">
	  <label for="image">IMAGEN</label>
	  <input type="file"  class="form-control" id="image" name="image" required>
	</div>
	<button type="submit" class="btn btn-block btn-success">Guardar</button>
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


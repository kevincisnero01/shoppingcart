@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-3">
		 <h1>DETALLE DE PRODUCTO</h1>
	</div><!--col-->
</div><!-- row-->

<div class="row">

<div class="col-md-4 col-md-offset-3">
<fieldset disabled>
	<div class="form-group">
	  <label for="name">NOMBRE</label>
	  <input type="text"  class="form-control" id="name" name="name" value="{{ $item->name }}">
	</div>

	<div class="form-group">
	  <label for="description">DESCRIPCION</label>
	  <textarea name="description" class="form-control" id="description">{{ $item->description }}</textarea>
	</div>
	<div class="row">	
		<div class="col-md-6">	

		<div class="form-group">
		  <label for="price">PRECIO</label>
		  <input type="text" name="price" class="form-control" id="price" value="{{ $item->price }}">
		</div>

		</div><!--col-->
		<div class="col-md-6">

		<div class="form-group">
		  <label for="quantity">CANTIDAD</label>
		  <input type="text"  class="form-control" id="quantity" name="quantity" value="{{ $item->quantity }}">
		</div>

		</div><!--col-->
	</div><!--row-->

	 <label for="color">ESTATUS</label>
	  <select class="form-control" name="status" id="status">
	      <option value="1" @if($item->status == 1) selected='selected' @endif >Activo</option>
	      <option value="0" @if($item->status == 0) selected='selected' @endif >Inactivo</option>
	  </select>  
</fieldset>
<br>
		<a href="{{ route('catalogs.index') }}" class="btn btn-lg btn-block btn-default">Atras</a>
</div><!--col-->

<div class="col-md-4">
		<img src="{{ asset($item->image) }}" alt="title" id="boxImg">
</div><!--col-->
</div><!-- row-->

@endsection


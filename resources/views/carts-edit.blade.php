@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>ACTUALIZAR CANTIDAD</h1>

	<form method="POST" action="{{route('carts.update', ['id' => $item->id]) }}">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">
	
		<div class="form-group">
		  <label for="quantity">CANTIDAD ACTUAL</label>
		  <input type="text"  class="form-control"  value="{{ $item->quantity }}" disabled="disabled">
		</div>

		<div class="form-group">
		  <label for="quantity">CANTIDAD NUEVA</label>
		  <input type="number"  class="form-control" id="quantity" name="quantity">
		  <ul>
		  	<li><small class="form-text text-muted">Ingrese la nueva cantidad que desea <u>adquirir</u>.</small></li>
		  	<li><small class="form-text text-muted">No puede superar el stock actual </small></li>
		  </ul>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>

	</form>
</div><!--col-->
</div><!-- row-->
@endsection


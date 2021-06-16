@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>ACTUALIZAR ESTATUS</h1>

	<form method="POST" action="{{route('orders.update', ['id' => $order->id]) }}">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">
	

		<div class="form-group">
		  <label for="status">ESTATUS</label>
		  <select class="form-control" id="status" name="status" required >
		  	<option value="">Seleccione</option>
		  	<option value="pendiente" @if($order->status == 'pendiente') selected @endif >Pendiente</option>
		  	<option value="armando" @if($order->status == 'armando') selected @endif >Armando</option>
		  	<option value="enviando" @if($order->status == 'enviando') selected @endif >Enviando</option>
		  	<option value="entregado" @if($order->status == 'entregado') selected @endif >Entregado</option>
		  </select>
		  <ul>
		  	<li><small class="form-text text-muted">Actualice el estatus en que se encuentra el pedido.</li>
		  </ul>
		</div>

	
		<button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
		<a href="{{ route('orders.index') }}" class="btn btn-default btn-block">Atras</a>

	</form>
</div><!--col-->
</div><!-- row-->
@endsection


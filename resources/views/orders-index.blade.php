@extends('layouts.app')
@section('content')
<div class="row">
	<di class="col-md-8 col-md-offset-2">

		<div class="header-page">
			<div class="row">
				<div class="col-md-6">
					<h1>Listado de Pedidos <small class="badge"></small></h1>
				</div><!--col-->
				<div class="col-md-6 text-right">
					<div class="btn-group  btn-group-custom">

						<a href="#" class="btn btn-default">
							<span class="glyphicon glyphicon-print"></span>	Imprimir
						</a>
					</div><!--btn-group-->
				</div><!--col-->
			</div><!--row-->
		</div><!--header-page-->

		<hr>

		<table class="table table-striped">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Cantidad</th>
					<th class="text-center">Total</th>
					<th>Metodo</th>
					<th>Estatus</th>
					<th>Fecha</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@php $i = 1; @endphp
				@foreach($orders as $order)
				<tr>
					<td class="text-center">{{ $i }}</td>
					<td class="text-center">{{ $order->quantity }}</td>
					<td class="text-center">{{ $order->total }}</td>
					<td>{{ $order->method }}</td>
					<td>{{ $order->status }}</td>
					<td>{{ $order->date }}</td>
					<td>
						<a href="{{ route('orders.show', ['id' => $order->id]) }}" class="btn btn-info">
							<span class="glyphicon glyphicon-zoom-in"></span>
						</a>
						<a href="{{ route('orders.edit', ['id' => $order->id]) }}" class="btn btn-primary">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td>
				</tr>
				@php $i++; @endphp
				@endforeach
			</tbody>
		</table>

		<nav aria-label="Page navigation" class="text-center">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>

	</di><!-- col -->
</div><!-- row -->
@endsection
@extends('layouts.app')
@section('content')
<div class="row">
	<di class="col-md-8 col-md-offset-2">

		<div class="header-page">
			<div class="row">
				<div class="col-md-6">
					<h1>Detalle de Pedido <small class="badge"></small></h1>
				</div><!--col-->
				<div class="col-md-6 text-right">
					<div class="btn-group  btn-group-custom">
						<a href="{{ route('orders.index') }}" class="btn btn-default">
							<span class="glyphicon glyphicon-share-alt"></span>	Atras
						</a>
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
					<th class="text-center">Producto</th>
					<th class="text-center">Cantidad</th>
					<th class="text-center">Precio</th>
					<th class="text-center">Subtotal</th>
				</tr>
			</thead>
			<tbody>
				@php $i = 1; @endphp
				@foreach($order_detail as $item)
				<tr>
					<td class="text-center">{{ $i }}</td>
					<td class="text-center">{{ $item->id }}</td>
					<td class="text-center">{{ $item->pivot->quantity }}</td>
					<td class="text-center">{{ $item->pivot->price }}</td>
					<td class="text-center">{{ $item->pivot->quantity*$item->pivot->price }}</td>
				</tr>
				@php $i++; @endphp
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4" class="text-left">Total</th>
					<th class="text-center">{{ $order->total }}</th>
				</tr>
			</tfoot>
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
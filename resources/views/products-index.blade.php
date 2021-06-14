@extends('layouts.app')
@section('content')
<div class="row">
	<di class="col-md-8 col-md-offset-2">

		<div class="header-page">
			<div class="row">
				<div class="col-md-6">
					<h1>Listado de Productos <small class="badge">{{ $count }}</small></h1>
				</div><!--col-->
				<div class="col-md-6 text-right">
					<div class="btn-group  btn-group-custom">
						<a href="{{ route('products.create') }}" class="btn btn-default">
							<span class="glyphicon glyphicon-floppy-disk"></span> Registro
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
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Estatus</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->quantity }}</td>
					<td>{{ $product->status }}</td>
					<td>
						<a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>

						<form method="POST" action="{{ route('products.destroy',['id' => $product->id]) }}" class="form-submit">
				          <input type="hidden" name="_token" value="{{ csrf_token() }}">
				          <input type="hidden" name="_method" value="DELETE">

				          <button type="submit" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></button>
				    	</form>

					</td>
				</tr>
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
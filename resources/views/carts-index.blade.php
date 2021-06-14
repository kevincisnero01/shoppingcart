@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
@empty (!$cart)
<table class="table">
    <thead>
        <tr>            
            <th sc ope="col">#ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th sc ope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->product->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
             <th scope="row">
		    	<form method="POST" action="{{route('carts.destroy',['id' => $item->id])}}" class="form-submit">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		          <input type="hidden" name="_method" value="DELETE">

		          <button type="submit" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></button>
		    	</form>
				<a href="{{ route('carts.edit', ['cart' => $item->id] ) }}" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Actualizar"></a>
			</th>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-default" href="{{ route('carts.clear') }}">Limpiar Todo</a>
@else 
<div class="alert alert-warning text-center" role="alert">
    <h3 class="">No se encontraron productos agregados al carrito. <br>
    <small>Para agregar uno debe dirigirse al <strong>"Catalogo"</strong> <a href="{{ route('catalogs.index') }}">(Aqui)</a></small></h3>
</div>

@endempty

</div>
</div><!-- row-->
@endsection


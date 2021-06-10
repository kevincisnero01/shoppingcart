@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
@if (!Cart::isEmpty())
<table class="table">
    <thead>
        <tr>            
            <th sc ope="col">#ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Atributos</th>
            <th sc ope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach (Cart::getContent() as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>
                @foreach ($item->attributes as $key => $attribute)
                {{$key}}: {{$attribute}}.
                @endforeach
            </td>
             <th scope="row">
		    	<form method="POST" action="{{route('cart.destroy',$item->id)}}" class="form-submit">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		          <input type="hidden" name="_method" value="DELETE">

		          <button type="submit" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></button>
		    	</form>
				<a href="{{ route('cart.edit',['cart' => $item->id]) }}" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Actualizar"></a>
			</th>
        </tr>
        @endforeach
    </tbody>
</table>

<table class="table">
  <thead>
            <tr>
                <th sc ope="col">Items</th>
                <th sc ope="col">Sub total</th>
                <th scope="col">Total</th>
             </tr>
  </thead>
  <tbody>
              <tr>
                  <th scope="row">{{Cart::getTotalQuantity()}}</th>
                  <th scope="row">{{Cart::getSubTotal()}}</th>
                  <th scope="row">{{Cart::getTotal()}}</th>
               </tr>
  </tbody>
</table>

<a class="btn btn-default" href="{{ route('cart.clear') }}">Limpiar Todo</a>

@endif
</div>
</div><!-- row-->
@endsection


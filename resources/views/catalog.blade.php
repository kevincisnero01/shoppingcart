@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">

<div class="jumbotron">

  <h1>Catalogo </h1>

  <p>Listado de Productos
  <span class="label label-success">Ropa</span>
  <span class="label label-primary">Calzado</span>
  <span class="label label-warning">Accesorios</span>
  <span class="label label-default">Electrodomesticos</span>
  </p>

  @if( count(Cart::getContent()) )
    <a href="{{ route('carts.index') }}" class="btn btn-primary btn-lg">Ver Carrito de Compras</a>
  @endif
</div>

<div class="row">
@foreach ($products as $product)

  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="{{ asset($product->image) }}" alt="title">
      <div class="caption">
        <h3><a href="{{ route('carts.show',['id' => $product->id]) }}">{{ $product->name }}</a></h3>
        <p>{{ $product->price }} Bs | {{ $product->quantity }} </p>
        
        <form method="POST" action="{{ route('carts.store', ['product_id' => $product->id ]) }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="input-group">
            <input type="number" class="form-control" name="quantity">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>

@endforeach
</div>
</div><!-- col-->
</div><!-- row-->
@endsection


@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">

<div class="jumbotron">
  <h1>Catalogo</h1>
  <p>Listado de Productos</p>
  <div>
    <span class="label label-success">Ropa</span>
    <span class="label label-primary">Calzado</span>
    <span class="label label-warning">Accesorios</span>
    <span class="label label-default">Electrodomesticos</span>
  </div>
</div>

<div class="row">
@foreach ($products as $product)

  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="{{ asset($product->image) }}" alt="title">
      <div class="caption">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }} Bs | {{ $product->quantity }} </p>
        
        <form method="POST" action="#">
        <div class="input-group">
          <input type="number" class="form-control" aria-label="...">
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


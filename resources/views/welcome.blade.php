@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">

<div class="jumbotron">
  <h1>Carrito de Compras! <small>(Shoppincart)</small></h1>
  <p> 
  	<button class="btn btn-default btn-lg">PHP</button>
  	<button class="btn btn-warning btn-lg">Laravel</button>
  	<button class="btn btn-primary btn-lg">Bootstrap</button>
  </p>
  <p>Paquete: "darryldecode/laravelshoppingcart" </p>
  <ul>
  	<li><spand class="glyphicon glyphicon-ok"></spand> Guardar carrito Sesiones v1</li>
    <li><spand class="glyphicon glyphicon-ok"></spand> Guardar carrito Sesiones v2 + Catalogo de productos en BD</li>
  	<li><spand class="glyphicon glyphicon-remove"></spand> Guardar carrito Base de datos</li>
  </ul>
</div>

</div>
</div><!-- row-->
@endsection


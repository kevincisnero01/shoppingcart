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
  	<li><spand class="glyphicon glyphicon-ok"></spand> v1 Guardar carrito con Sesiones </li>
    <li><spand class="glyphicon glyphicon-ok"></spand> v2 Guardar carrito con Sesiones + Catalogo</li>
  	<li><spand class="glyphicon glyphicon-ok"></spand> v3 Guardar carrito en Base de datos + Productos + Catalogo + Pedidos</li>
  </ul>
</div>

</div>
</div><!-- row-->
@endsection


@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
@if(count($cart) > 0)
<table class="table">
    
    <thead>
        <tr>            
            <th sc ope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Subtotales</th>
            <th sc ope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
@php $i = 0; @endphp        
@foreach ($cart as $item)
<tr>
  <th scope="row">{{ $i+1 }}</th>
  <td>{{$item->product->name}}</td>
  <td>{{$item->price}}</td>
  <td>{{$item->quantity}}</td>
  <td>{{ $subtotales[$i] }}</td>
  <th scope="row">
      <a href="{{ route('carts.edit', ['cart' => $item->id] ) }}" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Actualizar"></a>

  <form method="POST" action="{{route('carts.destroy',['id' => $item->id])}}" class="form-submit">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="DELETE">

      <button type="submit" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></button>
  </form>
  </th>
</tr>
@php $i++; @endphp   
@endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Totales:</th>
            <th >{{ $totalItems }}</th>
            <th >{{ $totalPrices }}</th>
            <th ></th>
        </tr>
    </tfoot>
</table>

    <form  method="POST" action="{{route('orders.store')}}" class="form-submit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="totalItems" value="{{ $totalItems }}">
        <input type="hidden" name="totalPrices" value="{{ $totalPrices }}">

        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Carrito</button>
    </form>

    <a class="btn btn-default" href="{{ route('carts.clear') }}" onclick="return confirm('Estas seguro que deseas eliminar todos los items actuales del carrito')" ><span class="glyphicon glyphicon-erase"></span> Limpiar Carrito</a>
@else 

<div class="alert alert-warning text-center" role="alert">
    <h3 class="">No se encontraron productos agregados al carrito. <br>
    <small>Para agregar uno debe dirigirse al <strong>"Catalogo"</strong> <a href="{{ route('catalogs.index') }}">(Aqui)</a></small></h3>
</div>
@endif

</div>
</div><!-- row-->
@endsection


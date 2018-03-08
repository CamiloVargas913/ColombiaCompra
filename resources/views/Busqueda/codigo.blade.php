@extends('Home')
@section('contenido')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Busqueda</a>
        </li>
        <li class="breadcrumb-item active">Codigo</li>
      </ol>
    </div>
    <div class="container-fluid col-10 p-3 card">
      <h2 class="text-center" >Busqueda Por Codigo</h2>
      <form action="{{url('formulario')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group ">
         <input type="number"  class="form-control" placeholder="Ingrese Codigo"  name="codigo">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </form>
    </div>
@stop
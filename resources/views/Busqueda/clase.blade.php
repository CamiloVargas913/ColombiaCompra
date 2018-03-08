@extends('Home')
@section('contenido')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Busqueda</a>
        </li>
        <li class="breadcrumb-item active">Clase</li>
      </ol>
    </div>
  <h2 class="text-center" >Busqueda Por Clase</h2>
  <form action="{{url('formulario')}}" method="POST">
  	{{csrf_field()}}
    <div class="form-group ">
     <input type="text"  class="form-control" placeholder="Ingrese Clase"  name="clase">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
@stop
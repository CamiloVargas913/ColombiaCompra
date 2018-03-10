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
  
  <div class="container-fluid col-10 card p-3">
    <h2 class="text-center" >Busqueda Por Clase</h2>
    <form action="{{url('formulario')}}" method="POST">
      {{csrf_field()}}
      <div class="form-group ">
          <select  class="form-control" placeholder="Ingrese Tipo"  name="tipo">
            <option value=" ">Selecione una Clase</option>
            <option value="A">Clase A</option>
            <option value="B">Clase B</option>
            <option value="C">Clase C</option>
          </select>
        </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
     </form>
    </div>
@stop
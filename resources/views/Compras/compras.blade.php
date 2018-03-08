@extends('Home')
@section('contenido')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Compras</a>
        </li>
        <li class="breadcrumb-item active">Compra Articulos</li>
      </ol>
    </div>
  <form action="{{url('formulario')}}" method="POST">
  	{{csrf_field()}}
    <div class="container col-8 card p-4">
       <h2 class="text-center" >Ingrese Su Compra</h2>
      <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Apellido" name="apellido" id="example-text-input" required="">
      </div>
    </div><div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="number" placeholder="C.C" name="cedula" id="example-text-input" required="">
      </div>
    </div><div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="number" placeholder="# Contrato" name="contrato" id="example-text-input" required="">
      </div>
    </div><div class="form-group row">
      <div class="col-12">
        <textarea class="form-control" rows="5" id="comment" name="descripcion">Descripción Contrato.</textarea>
      </div>
    </div><div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Valor" name="valor" id="example-text-input" required="">
      </div>
    </div>
     <button type="submit" class="btn btn-primary">Ingresar Compra</button>
    </div>
  </form>
@stop
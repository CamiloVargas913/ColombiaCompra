@extends('Home')
@section('contenido')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ 'compras' }}">Compras</a>
        </li>
        <li class="breadcrumb-item active">Compra Articulos</li>
      </ol>
    </div>
  <form action="{{url('formulariocompras')}}" method="POST">
  	{{csrf_field()}}
    <div class="container col-8 card p-4">
       <h2 class="text-center" >Ingrese Su Compra</h2>
      <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Nombre" name="nombrecomprador" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Apellido" name="Apellido" id="example-text-input" required="">
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
        <input class="form-control" type="number" placeholder="Valor del contrato" name="valorcontrato" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Codigo producto N° 1" name="producto1" id="example-text-input" required="">
      </div>
    </div>  
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 2" name="producto2" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 3" name="producto3" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 4" name="producto4" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 5" name="producto5" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 6" name="producto6" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 7" name="producto7" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 8" name="producto8" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 9" name="producto9" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-12">
      <input class="form-control" type="text" placeholder="Codigo producto N° 10" name="producto10" id="example-text-input">
    </div>
    </div>
     <button type="submit" class="btn btn-primary">Ingresar Compra</button>
    </div>
  </form>
@stop
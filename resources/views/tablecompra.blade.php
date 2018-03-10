@extends('Home')
@section('contenido')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ 'compras' }}">Compras</a>
        </li>
        <li class="breadcrumb-item active">Compra Generada</li>
      </ol>
    </div>
	<div class="container">
      <div class="col-md-12 card p-3"> 
          <h2 class="text-center card-header">Factura</h2>
        <address>
              <?php foreach ($users as $key => $user): ?>
                        <strong>{{$key.": "}}</strong>{{$user}} <br>     
                    <?php endforeach ?>                                         
        </address>
        <table class="table table-dark table-striped">
      <h4 >Detalle Compra</h4>
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Valor</th>
            <th scope="col">Clase</th>
            <th scope="col">Tipo</th>
            <th scope="col">Subtotal</th>    
          </tr>
        </thead>
       <tbody>
                <?php foreach ($codigos as $codigo): ?>
          <tr>
                <?php foreach ($codigo as $key => $cod):?>
                        <td>{{$cod}}</td>    
                <?php endforeach ?>
          </tr>   
                <?php endforeach ?>
                <tr> 
                    <th scope="col" colspan="5">Total</th> 
                    <td colspan="5"><?php  echo $codigo['Total']; ?></td>
                </tr>
           
        </tbody>
    </table>
      </div>
@stop
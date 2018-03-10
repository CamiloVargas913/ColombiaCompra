@extends('Home')
@section('contenido')
	<div class="container card p-3">
    <h3 class="card-header">Productos</h3>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Valor</th>
            <th scope="col">Clase</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>
        <tbody>
                <?php foreach ($todos as $todo): ?>
          <tr>
                <?php foreach ($todo as $key => $todo): ?>
                        <td>{{$todo}}</td>       
                    <?php endforeach ?>
          </tr>
                    <?php endforeach ?>
        </tbody>
    </table>
  </div>	
@stop
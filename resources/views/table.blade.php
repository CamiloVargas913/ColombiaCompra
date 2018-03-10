@extends('Home')
@section('contenido')

	<div class="container card">
    <table class="table table-dark table-striped">
        <thead>
          <h3 class="text-center card-header">Resultados Busqueda</h3>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Valor</th>
            <th scope="col">Clase</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>
        <tbody>
                <?php foreach ($archivos as $archivo): ?>
          <tr>
                <?php foreach ($archivo as $key => $archivo): ?>
                        <td>{{$archivo}}</td>       
                    <?php endforeach ?>
          </tr>
                    <?php endforeach ?>
        </tbody>
    </table>
  </div>
@stop
@extends('layout.app')

@section('contenido')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($peliculas as $pelicula)
        <tr>
        <th scope="row">{{$pelicula->id}}</th>
        <td>{{$pelicula->nombre}}</td>
        <td>{{$pelicula->descripcion}}</td>
        <td>{{$pelicula->imagen}}</td>
        </tr>
    @endforeach
   
   
  </tbody>
</table>
@endsection
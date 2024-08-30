@extends('layout.app')

@section('contenido')
<form action="{{ route('peliculas.store')}}" method="post">

@csrf

    <div class="mb-3">
        <label class="form-label">Nombre Pelicula</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input  type="text" class="form-control"name="imagen">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input  type="text" class="form-control" placeholder="" name="descripcion">
    </div>
    <div class="mb-3">
        <label class="form-label">Trailer</label>
        <input  type="text" class="form-control" placeholder="" name="trailer">
    </div>
    <button type="submit">Guardar</button>
</form>
@endsection
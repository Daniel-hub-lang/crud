@extends('layouts.app')

@section('content')
<div class="container d-flex y justify-content-center">
	<div class="card mb-3" style="max-width: 640px;">
  <div class="row g-0">  
    <div class="col-md-3">  <br> <br>
	<img  width="150px" height="200px"  src="{{route('show.image',$libro->Portada)}}"> 
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>Titulo del Libro:</strong>  {{$libro->Titulo}} <br> </h5>
        <p class="card-text"> <h3><strong> Descripción:</strong> </h3> <h5> <p class="text-sm-start"> {{$libro->DescripcionCorta}} </p></h5> </p>
        <p class="card-text"><small class="text-muted">Biblioteca oscura</small></p>
      </div>
    </div></div>
  </div>
  <br><br>
  </div>
  
 <div class="container">
<div class="card-group">
<div class="card text-dark bg-warning mb-3" style="max-width: 25rem;">
  <div class="card-header">Autor del libro</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca Oscura</h5>
    <p class="card-text">  {{$libro->Autor}}</p>
  </div>
  <br>
</div>
<div class="card text-dark bg-light mb-3" style="max-width: 25rem;">
  <div class="card-header">Año de publicación</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca Oscura</h5>
    <p class="card-text">{{$libro->año}}</p>
  </div>
</div>

<div class="card text-dark bg-warning mb-3" style="max-width: 25rem;">
  <div class="card-header">Número de Páginas</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca Oscura</h5>
    <p class="card-text"> {{$libro->numeroPaginas}} páginas</p>
  </div>
</div>
</div>  <br> <br>



<div class="card-group">
<div class="card text-dark bg-warning mb-3" style="max-width: 25rem;">
  <div class="card-header">Editorial de procedéncia</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca oscura</h5>
    <p class="card-text">{{$libro->editorial}}	</p>
  </div>
  <br>
</div>
<div class="card text-dark bg-light mb-3" style="max-width: 25rem;">
  <div class="card-header">País de origen</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca oscura</h5>
    <p class="card-text">{{$libro->pais}}</p>
  </div>
</div>

<div class="card text-dark bg-warning mb-3" style="max-width: 25rem;">
  <div class="card-header">INBS del libro</div>
  <div class="card-body">
    <h5 class="card-title">Biblioteca oscura</h5>
    <p class="card-text">{{$libro->barra}}</p>
  </div>
</div>
</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{url('bibliotecas/create')}}" class="btn btn-success"> Registrar Nuevo Libro</a>
<br>
    <br>
    
    <form class="form-search content-search navbar-form" action="{{route('bibliotecas.index')}}" method="GET">
    <div class="input-group"> 
  <input placeholder="Buscar" class="form-control form-text" type="text" name="search" id="search" value="{{request()->query('search')}}" /> 
        <span class="input-group-btn">
        &nbsp;  &nbsp;&nbsp;  &nbsp; <button type="submit" class="btn btn-primary"><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span> Enviar</button>
        </span>
    </div>
    
</form>
    <br>
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Portada</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Descripción</th>
           
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bibliotecas as $biblioteca)
        <tr>
            <td>{{$biblioteca->id}}</td>

            <td>

            <img width="80px" height="120px" src="{{route('show.image',$biblioteca->Portada)}}">
            </td>
            
            <td>{{$biblioteca->Titulo}}</td>
            <td>{{$biblioteca->Autor}}</td>
            <td>{{$biblioteca->DescripcionCorta}}</td>
            <td>
            <a href="{{url('/bibliotecas/'.$biblioteca->id.'/edit')}}" class="btn btn-warning ">
            Editar 
            </a> &nbsp;  &nbsp; 
             <a href="{{route('show.libro',$biblioteca->id)}}" class="btn btn-primary  "> 
               &nbsp;  Ver &nbsp;  
            </a>  &nbsp;  &nbsp; <br>
            
            
            <form action="{{url('/bibliotecas/'.$biblioteca->id)}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE ')}}
            
            <input class="btn btn-danger " type="submit" onclik="return confirm('¿Deseas Borrar?')"  value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table> 


</div>
@endsection
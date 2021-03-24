<h1>{{$modo}} Libro</h1>
<div class="form-group">

<label for="Titulo">Titulo del libro </label>
<input type="text" class="form-control"  name="Titulo" value="{{ isset($bibliotecas->Titulo)?$bibliotecas->Titulo:old('Titulo')}}"  id="Titulo"  >
<br>
</div>

<div class="form-group">
<label for="Autor">Nombre del Autor</label>
<input type="text" class="form-control" name="Autor" value="{{isset($bibliotecas->Autor)?$bibliotecas->Autor:old('Autor')}}" id="Autor">
<br>
</div>

<div class="form-group">
<label for="DescripcionCorta">Inserta la Descripción del libro.</label> <br>
<textarea type="text" class="form-control" name="DescripcionCorta"value="{{isset($bibliotecas->DescripcionCorta)?$bibliotecas->DescripcionCorta:old('DescripcionCorta')}}" id="DescripcionCorta" name="DescripcionCorta" rows="10" cols="30"></textarea>
<br>
</div>

<div class="form-group">
<label for="barra">ISBN</label> 
<input type="text" class="form-control" name="barra" value="{{isset($bibliotecas->barra)?$bibliotecas->barra:old('barra')}}" id="barra">
<br>
</div>

<div class="form-group">
<label for="pais">País de origen</label>
<input type="text" class="form-control" name="pais" value="{{isset($bibliotecas->pais)?$bibliotecas->pais:old('pais')}}" id="pais">
<br>
</div>

<div class="form-group">
<label for="editorial">Editorial</label>
<input type="text" class="form-control" name="editorial" value="{{isset($bibliotecas->editorial)?$bibliotecas->editorial:old('editorial')}}" id="editorial">
<br>
</div>

<div class="form-group">
<label for="numeroPaginas">Numero de páginas</label>
<input type="number" class="form-control" name="numeroPaginas" value="{{isset($bibliotecas->numeroPaginas)?$bibliotecas->numeroPaginas:old('numeroPaginas')}}" id="numeroPaginas">
<br>
</div>

<div class="form-group">
<label for="año">Año</label>
<input type="date" class="form-control" name="año" value="{{isset($bibliotecas->año)?$bibliotecas->año:old('año')}}" id="año">
<br>
</div>


<br>
</div>

<input type="file" class="form-control" name="Portada" value="" id="Portada">
<br>
</div>
<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{url('bibliotecas/')}}" > Regresar</a>
<br>

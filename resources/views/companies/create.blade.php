@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-primary" role="alert">
     <ul>
          @foreach($errors->all() as $error)
          <li> {{ $error }}</li>
          @endforeach
     </ul>

</div>
@endif

Sección para crear empresas

<form action="{{url('/companies')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}

<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('Nombre') ? 'is-invalid':''}}" name="Nombre" id="Nombre" value="{{ isset($company->Nombre)?$company->Nombre:''}}">
</div>

<div class="form-group">
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="">
</div>

<div class="form-group">
    <label for="Logotipo" class="control-label">{{'Logotipo'}}</label>
    @if(isset($company -> Logotipo))
    <br/>
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$company -> Logotipo}}" alt="" width="200">
    <br/>
    @endif
    <input type="file" class="form-control" name="Logotipo" id="Logotipo" value="">
</div>

<div class="form-group">
<label for="SitioWeb" class="control-label">{{'SitioWeb'}}</label>
<input type="varchar" class="form-control" name="SitioWeb" id="SitioWeb" value="{{ isset($company->SitioWeb)?$company->SitioWeb:''}}">
</div>

<input type="submit" class="btn btn-success" value="Agregar">

<a class="btn btn-primary" href="{{url('companies')}}">Regresar</a>

</form>
</div>
@endsection

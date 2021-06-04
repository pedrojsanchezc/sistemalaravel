@extends('layouts.app')

@section('content')

<div class="container">

Sección para Editar

<form action="{{ url('/companies/' . $company -> id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
     {{method_field('PATCH')}}

    <div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{   isset($company -> Nombre) ?$company -> Nombre: '' }}">
    </div>

    <div class="form-group">
        <label for="Correo" class="control-label">{{'Correo'}}</label>
        <input type="email" class="form-control" name="Correo" id="Correo" value="{{   isset($company -> Correo) ?$company -> Correo: '' }}">
    </div>

    <div class="form-group">
        <label for="Logotipo" class="control-label">{{'Logotipo'}}</label>
        <br/>
        @if(isset($company -> Logotipo))
        <br/>
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$company -> Logotipo}}" alt="" width="200">
        <br/>
        @endif
        <br/>
        <input type="file" class="form-control" name="Logotipo" id="Logotipo" value="">
    </div> 

    <div class="form-group">
    <label for="SitioWeb" class="control-label">{{'SitioWeb'}}</label>
    <input type="varchar" class="form-control" name="SitioWeb" id="SitioWeb" value="{{   isset($company -> SitioWeb) ?$company -> SitioWeb: '' }}">
    </div>

    <input type="submit" class="btn btn-success" value="Modificar">
    
    <a class="btn btn-primary" href="{{url('companies')}}">Regresar</a>

</form>
</div>
@endsection
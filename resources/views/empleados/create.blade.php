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

Sección para crear empleados

<form action="{{url('/empleados')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}

<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('Nombre') ? 'is-invalid':''}}" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}">
</div>

<div class="form-group">
<label for="Apellido" class="control-label">{{'Apellido'}}</label>
<input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:''}}">
</div>

<div class="form-group">
<label for="Empresa" class="control-label">{{'Empresa'}}</label>
<input type="text" class="form-control" name="Empresa" id="Empresa" value="{{ isset($empleado->Empresa)?$empleado->Empresa:''}}">
</div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control" name="Correo" id="Correo" value="">
</div>

<div class="form-group">
     <label for="Telefono" class="control-label">{{'Telefono'}}</label>
     <input type="number" class="form-control" name="Telefono" id="Telefono" value="">
</div>

<input type="submit" class="btn btn-success" value="Agregar">

<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>

</form>
</div>
@endsection
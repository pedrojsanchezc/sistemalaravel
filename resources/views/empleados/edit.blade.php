@extends('layouts.app')

@section('content')

<div class="container">

Sección para Editar

<form action="{{ url('/empleados/' . $empleado -> id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
     {{method_field('PATCH')}}

    <div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{   isset($empleado -> Nombre) ?$empleado -> Nombre: '' }}">
    </div>

    <div class="form-group">
    <label for="Apellido" class="control-label">{{'Apellido'}}</label>
    <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{   isset($empleado -> Apellido) ?$empleado -> Apellido: '' }}">
    </div>

    <div class="form-group">
    <label for="Empresa" class="control-label">{{'Empresa'}}</label>
    <input type="text" class="form-control" name="Empresa" id="Empresa" value="{{   isset($empleado -> Empresa) ?$empleado -> Empresa: '' }}">
    </div>

    <div class="form-group">
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="{{   isset($empleado -> Correo) ?$empleado -> Correo: '' }}">
    </div>

    <div class="form-group">
        <label for="Telefono" class="control-label">{{'Telefono'}}</label>
        <input type="number" class="form-control" name="Telefono" id="Telefono" value="{{   isset($empleado -> Telefono) ?$empleado -> Telefono: '' }}">
    </div>

    {{--
    <div class="form-group">
    <label for="Foto" class="control-label">{{'Foto'}}</label>
    <br/>
    @if(isset($empleado -> Foto))
    <br/>
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado -> Foto}}" alt="" width="200">
    <br/>
    @endif
    <br/>
    <input type="file" class="form-control" name="Foto" id="Foto" value="">
    </div> --}}

    <input type="submit" class="btn btn-success" value="Modificar">
    
    <a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>

</form>
</div>
@endsection
{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New company</div>
                    <div class="card-body">
                        <a href="{{ url('/companies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/companies') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('companies.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

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

{{--
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


<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($empleado -> Foto))
<br/>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado -> Foto}}" alt="" width="200">
<br/>
@endif
<input type="file" class="form-control" name="Foto" id="Foto" value="">
</div> --}}

<input type="submit" class="btn btn-success" value="Agregar">

<a class="btn btn-primary" href="{{url('companies')}}">Regresar</a>

</form>
</div>
@endsection

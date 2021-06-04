@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>
@endif

<table class="table table-light">
<thead class="thead-light">
    <tr>
      <th>Companies</th>
    </tr>
  </thead>
</table>

<a href="{{url('companies/create')}}" class="btn btn-success">Create new Companies</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
          <th>Companies List</th>
        </tr>
      </thead>
    </table>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Logotipo</th>
            <th>SitioWeb</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$company -> Nombre}}</td> 
            <td>{{$company -> Correo}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$company -> Logotipo}}" class="img-thumbnail img-fluid" alt="" width="100">
            </td>
            <td>{{$company -> SitioWeb}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url('/companies/'.$company-> id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/companies/'.$company -> id)}}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger"  type="submit" onclick="return confirm('¿Borrar?');">Borrar</button> 
            </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
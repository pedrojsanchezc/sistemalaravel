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
      <th>Employees</th>
    </tr>
  </thead>
</table>

<a href="{{url('empleados/create')}}" class="btn btn-success">Create new employee</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
          <th>Employees List</th>
        </tr>
      </thead>
    </table>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Empresa</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado -> Nombre}}</td> 
            <td>{{$empleado -> Apellido}}</td>
            <td>{{$empleado -> Empresa}}</td>
            <td>{{$empleado -> Correo}}</td>
            <td>{{$empleado -> Telefono}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado-> id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/empleados/'.$empleado -> id)}}" style="display:inline">
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
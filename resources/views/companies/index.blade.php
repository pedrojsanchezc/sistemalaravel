{{-- 

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Companies</div>
                    <div class="card-body">
                        <a href="{{ url('/companies/create') }}" class="btn btn-success btn-sm" title="Add New company">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/companies') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Correo</th><th>Logotipo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->Correo }}</td><td>{{ $item->Logotipo }}</td>
                                        <td>
                                            <a href="{{ url('/companies/' . $item->id) }}" title="View company"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/companies/' . $item->id . '/edit') }}" title="Edit company"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/companies' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete company" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $companies->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 --}}

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
            {{--<td>
            <img src="{{ asset('storage').'/'.$empleado -> Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
            </td>--}}
            <td>{{$company -> Nombre}}</td> {{--{{$empleado -> ApellidoPaterno}} {{$empleado -> ApellidoMaterno}}</td>--}}
            <td>{{$company -> Correo}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$company -> Logotipo}}" class="img-thumbnail img-fluid" alt="" width="100">
            </td>
            {{--
            <td>{{$company -> Logotipo}}</td> --}}
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
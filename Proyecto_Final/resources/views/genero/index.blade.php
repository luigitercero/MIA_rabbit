
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
@include('layouts.sidebar')
@include('layouts.alert')

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Genero</div>
    <div class="panel-body">
    <a href="{{ url('/genero/create') }}" class="btn btn-success btn-sm" title="Add New Post">
      <i class="fa fa-plus" aria-hidden="true"></i> agregar nuevo
    </a>
      <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Accion</th>
            </thead>    
            <tbody>
              @foreach($genero as $generos)
              <tr>
                <td>{{$generos->cod}}</td>
                <td>{{$generos->nombre}}</td>  
                <td>
                
                  {!!link_to_route('genero.edit', $title = 'editar', $parameters = $generos->cod, $attributes = ['class="btn btn-primary btn-xs"']);!!}
                </td>
              </tr>
              @endforeach
            </tbody> 
          </table> 
      </div>
    </div>
  </div>
</div>  
  </div>
</div>  

@endsection
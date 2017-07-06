
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
    <a href="{{ url('/roll/create') }}" class="btn btn-success btn-sm" title="Add New Post">
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
              @foreach($roll as $rolls)
              <tr>
                <td>{{$rolls->cod}}</td>
                <td>{{$rolls->nombre}}</td>  
                <td>
                  <!--{!!link_to_route('roll.edit', $title = 'editar', $parameters = $rolls->cod, $attributes = ['class="btn btn-primary btn-xs"']);!!}
                 -->
                  
                  <a href="{{ url('/roll/' . $rolls->cod . '/edit/') }}"
                  title="Edit Roll"><button class="btn btn-primary btn-xs">
                  <i class="fa fa-pencil-square-o" aria-hidden="true">
                 </i> Edit</button></a>
                 
                 <!--boton de borrar-->
                 
                 {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/roll', $rolls->cod],
                    'style' => 'display:inline'
                    ]) !!}
                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                  'type' => 'submit',
                  'class' => 'btn btn-danger btn-xs',
                  'title' => 'Delete Post',
                  'onclick'=>'return confirm("Confirm delete?")'
                   )) !!}
                {!! Form::close() !!}
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
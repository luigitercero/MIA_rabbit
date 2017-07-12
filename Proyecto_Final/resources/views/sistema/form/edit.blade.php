@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">

@include('layouts.alert')
@include('layouts.authError')

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Usuario</div>
    <div class="panel-body">
    <a href="{{ url('/directorio/create') }}" class="btn btn-success btn-sm" title="Add New directorio">
      <i class="fa fa-plus" aria-hidden="true"></i> agregar nuevo
    </a>
      <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <!--<th>Password</th>-->
             
              <th>accion   </th>
            </thead>    
            <tbody>
              @foreach($directorio as $directorios)
              <tr>
                <!--
                <td>{{$directorios->id}}</td>
                <td>{{$directorios->nombre}}</td>
                <td>{{$directorios->password}}</td>-->  
                
                             
                <td>
                  <!--{!!link_to_route('directorio.edit', $title = 'editar', $parameters = $directorios->cod, $attributes = ['class="btn btn-primary btn-xs"']);!!}
                 -->

                  <!-- <a href="{{ url('/directorio/' . $directorios->id . '/edit/') }}"
                  title="Edit Roll"><button class="btn btn-primary btn-xs">
                  <i class="fa fa-pencil-square-o" aria-hidden="true">
                 </i> Mostrar</button></a>
                 
                boton de borrar              
                 {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/directorio', $directorios->id],
                    'style' => 'display:inline'
                    ]) !!} 
                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                  'type' => 'submit',
                  'class' => 'btn btn-danger btn-xs',
                  'title' => 'Delete Post',
                  'onclick'=>'return confirm("Confirm delete?")'
                   )) !!}--> 
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
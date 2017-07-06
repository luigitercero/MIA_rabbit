
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
@include('layouts.sidebar')
@include('layouts.alert')

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Usuario</div>
    <div class="panel-body">
    <a href="{{ url('/usuario/create') }}" class="btn btn-success btn-sm" title="Add New usuario">
      <i class="fa fa-plus" aria-hidden="true"></i> agregar nuevo
    </a>
      <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Password</th>
              <th>correo</th>
              <th>Telefono</th>
              
             
              <th>Registro</th>
              <th>Direccion</th>
              
              <th>Roll</th>
              <th>Genero</th>
              <th>Accion   </th>
            </thead>    
            <tbody>
              @foreach($usuario as $usuarios)
              <tr>
                <td>{{$usuarios->id}}</td>
                <td>{{$usuarios->nombre}}</td>
                <td>{{$usuarios->pass}}</td>  
                <td>{{$usuarios->correo}}</td>
                <td>{{$usuarios->telefono}}</td>                
                <td>{{$usuarios->fregistro}}</td>
                <td>{{$usuarios->direccion}}</td>
                <td>{{$usuarios->roll_cod}}</td>
                <td>{{$usuarios->genero_cod}}</td>
                <td>
                  <!--{!!link_to_route('usuario.edit', $title = 'editar', $parameters = $usuarios->cod, $attributes = ['class="btn btn-primary btn-xs"']);!!}
                 -->
                  
                  <a href="{{ url('/usuario/' . $usuarios->id . '/edit/') }}"
                  title="Edit Roll"><button class="btn btn-primary btn-xs">
                  <i class="fa fa-pencil-square-o" aria-hidden="true">
                 </i> Edit</button></a>
                 
                 <!--boton de borrar-->                
                 {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/usuario', $usuarios->id],
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
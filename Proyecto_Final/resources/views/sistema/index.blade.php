@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
@include('layouts.sidebar')
@include('layouts.alert')
@include('layouts.authError')

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Usuario</div>
    <div class="panel-body">
    <a href="{{ url('/sistema/create') }}" class="btn btn-success btn-sm" title="Add New sistema">
      <i class="fa fa-plus" aria-hidden="true"></i> agregar nuevo
    </a>
      <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <!--<th>Password</th>-->
              <th>fecha   </th>
              <th>accion   </th>
            </thead>    
            <tbody>
              @foreach($sistema as $sistemas)
              <tr>
                <td>{{$sistemas->id}}</td>
                <td>{{$sistemas->nombre}}</td>
                <!--<td>{{$sistemas->password}}</td>-->  
                <td>{{$sistemas->fecha}}</td>
                             
                <td>
                  <!--{!!link_to_route('sistema.edit', $title = 'editar', $parameters = $sistemas->cod, $attributes = ['class="btn btn-primary btn-xs"']);!!}
                 -->

                  <a href="{{ url('/sistema/' . $sistemas->id . '/edit/') }}"
                  title="Edit Roll"><button class="btn btn-primary btn-xs">
                  <i class="fa fa-pencil-square-o" aria-hidden="true">
                 </i> Mostrar</button></a>
                 
                 <!--boton de borrar              
                 {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/sistema', $sistemas->id],
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
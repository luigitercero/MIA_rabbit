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

       <?php
      function BuscarHijo($id,$directorio){
        $salida = "<tr>";
        $tamanio = count($directorio);
        for($cont=0;$cont<$tamanio;$cont++){
            if ($directorio[$cont]->padre == $id){
               
           $salida= $salida."<td>".$directorio[$cont]->nombre;
            $salida =$salida."</td>";
            }
            $salida =$salida. BuscarHijo($directorio[$cont]->id,$directorio);
        }
         return $salida."</tr>";
        }          
?> 

 <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
             
             
              <th>Nombre</th>
            </thead>    
            <tbody>
              @foreach($directorio as $directorios)
              <tr>    
                  @if($directorio[count($directorio)-1]->id!=$directorios->id)
                  @for($i=$directorio[count($directorio)-1]->id; $i<$directorios->padre;$i++)
                  <th width = "10" height="50">-</th>
                  @endfor
                  
                  <td>{{$directorios->nombre}}</td>
            
                @endif              
              </tr>
              @endforeach

              
            </tbody> 
          </table> 
  </div>
</div>  
</div>
</div>  

@endsection




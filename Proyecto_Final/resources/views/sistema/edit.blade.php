@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
@include('layouts.sidebar')
@include('layouts.alert')
@include('layouts.authError')
@include('sistema.form.script')
<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Usuario</div>
    <div class="panel-body">
    <a href="{{ url('/directorio/create') }}" class="btn btn-success btn-sm" title="Add New directorio">
      <i class="fa fa-plus" aria-hidden="true"></i> agregar nuevo
    </a>

<?php
      function BuscarHijo($id,$directorio){
        echo "<ul>";
        $tamanio = count($directorio);
        for($cont=0;$cont<$tamanio;$cont++){
            if ($directorio[$cont]->padre == $id){ 
              echo "<li>";
              //echo "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
              echo "<img src=\"".asset('/images/book.png')."\"width=\"24\" height=\"24\" alt=\"icon\">";
              echo "   ".$directorio[$cont]->nombre;              
              BuscarHijo($directorio[$cont]->id,$directorio);
              //echo "<\li>";
            }   
        }
         echo "</ul>";
      }           
?> 

{{BuscarHijo($directorio[count($directorio)-1]->id,$directorio)}}
  
</div>
</div>  
</div>
</div>
@endsection





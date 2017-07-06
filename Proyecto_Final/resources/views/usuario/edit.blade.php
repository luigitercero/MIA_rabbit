
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
    @include('layouts.sidebar')
      <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">editar</div>
                    <div class="panel-body">
                        <a href="{{ url('/usuario') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
{!!Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'put'])!!}
  @include('usuario.form.edit')

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'aceptar', ['class' => 'btn btn-primary btn-xs']) !!}
        {!!Form::close()!!}
        {!!Form::open(['route'=>['usuario.destroy',$usuario->id],'method'=>'delete','style' => 'display:inline'])!!}
        {!!Form::submit('eliminar',['class'=>'btn btn-danger btn-xs'])!!}
        {!!Form::close()!!}
 </div></div> 
                </div>   
                </div>
            </div>
        </div>
    </div>
@endsection
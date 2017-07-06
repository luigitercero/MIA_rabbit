@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    @include('layouts.sidebar')
      <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Nuevo Usuario</div>
                    <div class="panel-body">
                        <a href="{{ url('/usuario') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        {!!Form::open(['route'=>'usuario.store','method'=>'post'])!!}
                        
                        <div>
                            @include('usuario.form.form') 
                        </div>
                           
                        
                    <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'aceptar', ['class' => 'btn btn-primary btn-s']) !!}
                    {!!Form::close()!!}
                 </div></div> 
                        
                    </div>   
                </div>
        </div>
    </div>
</div>
@endsection
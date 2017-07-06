
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
    @include('layouts.sidebar')
      <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">editar</div>
                    <div class="panel-body">
                        <a href="{{ url('/genero') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
{!!Form::model($genero,['route'=>['genero.update',$genero->cod],'method'=>'put'])!!}
  @include('genero.form.form')


{!!Form::close()!!}
<div class="form-group">
   
{!!Form::open(['route'=>['genero.destroy',$genero->cod],'method'=>'delete'])!!}
    {!!Form::submit('eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}


</div>
                </div>   
                </div>
            </div>
        </div>
    </div>
@endsection
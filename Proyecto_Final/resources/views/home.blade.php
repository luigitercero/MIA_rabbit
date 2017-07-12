

@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
@include('layouts.sidebar')
@include('layouts.alert')
@include('layouts.authError')

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Home</div>
    <div class="panel-body">
      <div class="table-responsive">
        <div class="panel-body">
                    You are logged in!
        </div>
      </div>
    </div>
  </div>
</div>  
</div>
</div>  

@endsection
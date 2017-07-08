
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
<<<<<<< HEAD
    {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
=======
    {!! Form::label('nombre', 'nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
<<<<<<< HEAD
    {!! Form::label('password', 'Clave', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
      
        <input class = 'form-control' name = "password" id = "pass" type="password">
=======
    {!! Form::label('password', 'password', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        <input class = 'form-control' name = "pass" id = "pass" type="password" value = {{$usuario->pass}}>
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
<div>
<<<<<<< HEAD
    {!! Form::label('correo', 'Correo', ['class' => 'col-md-4 control-label']) !!}
=======
    {!! Form::label('correo', 'correo', ['class' => 'col-md-4 control-label']) !!}
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
</div>
    
    <div class="col-md-6">
        <p>
<<<<<<< HEAD
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
=======
        {!! Form::text('correo', null, ['class' => 'form-control']) !!}
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
        {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'telefono', ['class' => 'col-md-4 control-label', 'HSPACE'=>'10']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <!--{!! Form::label('nacimiento', 'nacimiento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>

        {!! Form::text('nacimiento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nacimiento', '<p class="help-block">:message</p>') !!}
    </div>
    
<form>
    <div class="col-md-6">
	<label for="nacimiento">Date: </label>
     </div>
	 <input name="nacimiento" type="date"/>
     {!! $errors->first('nacimiento', '<p class="help-block">:message</p>') !!}
</form>
-->
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Fecha fregistro', 'Fecha de fregistro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        <input class = 'form-control' id="fregistro" name="fregistro" type="date" value= {{$usuario->fregistro}} />   
        {!! $errors->first('Date', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>


<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Date', 'Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
            <input  class = 'form-control' id="nacimiento" name="nacimiento" type="date" value= {{$usuario->nacimiento}} />   
            {!! $errors->first('Date', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('roll_cod', 'roll_cod', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
            <select name="roll_cod" id = "roll_cod" class="form-control">
              @foreach($roll as $rolls)
              @if($rolls->cod == $usuario->roll_cod)
              <option value= {{$rolls->cod}} selected >{{$rolls->nombre}}</option>
              @else
              <option value= {{$rolls->cod}} >{{$rolls->nombre}}</option>
              @endif
              @endforeach
            </select>
        </p>
    </div>
</div>



<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('genero_cod', 'genero_cod', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       <p>
            <select name="genero_cod" id = "genero_cod" class="form-control">
              @foreach($genero as $generos)
              @if($generos->cod == $usuario->genero_cod)
              <option value= {{$generos->cod}} selected >{{$generos->nombre}}</option>
              @else
              <option value= {{$generos->cod}}>{{$generos->nombre}}</option>
              @endif
              @endforeach
            </select>
        </p>
        <!--{!! Form::text('genero_cod', null, ['class' => 'form-control']) !!}-->
        {!! $errors->first('genero_cod', '<p class="help-block">:message</p>') !!}
    </div>
</div>


	
	 

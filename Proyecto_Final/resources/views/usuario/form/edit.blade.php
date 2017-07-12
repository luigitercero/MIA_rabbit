
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Clave', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
      
        <input class = 'form-control' name = "password" id = "pass" type="password">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
<div>
    {!! Form::label('correo', 'Correo', ['class' => 'col-md-4 control-label']) !!}
</div>
    
    <div class="col-md-6">
        <p>
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
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

</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Fecha fregistro', 'Fecha de fregistro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        <input class = 'form-control' id="fregistro" name="fregistro" type="date" value= {{$usuario->fregistro}} />   
        {!! $errors->first('fregistro', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>-->

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
            {!! $errors->first('nacimiento', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('roll_cod', 'roll_cod', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
            <select name="roll_cod" id = "roll_cod" class="form-control">
              @foreach($roll as $rolls)
              @if($rolls->cod < Auth::user()->roll_cod)
              
              @continue
              @endif
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


	
	 

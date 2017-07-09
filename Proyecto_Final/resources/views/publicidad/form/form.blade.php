
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('name', 'name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    <p>
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('eslogan', 'Eslogan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    <p>
        {!! Form::text('eslogan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('eslogan', '<p class="help-block">:message</p>') !!}
    </p>
    </div>
</div>


<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('mision', 'mision', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::textArea('mision', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mision', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('vision', 'vision', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::textArea('vision', null, ['class' => 'form-control']) !!}
        {!! $errors->first('vision', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('aboutme', 'aboutme', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::textArea('aboutme', null, ['class' => 'form-control']) !!}
        {!! $errors->first('aboutme', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('video', 'video', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('video', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('imagen', 'imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <p>
        {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
        {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
        </p>
    </div>
</div>
           
	 

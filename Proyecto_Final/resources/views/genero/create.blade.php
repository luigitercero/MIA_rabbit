hola estoy en creando
{!!Form::open(['route'=>'genero.store','method'=>'post'])!!}
<div>
    {!!Form::label('nombre:')!!}
    {!!Form::text('name')!!}
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

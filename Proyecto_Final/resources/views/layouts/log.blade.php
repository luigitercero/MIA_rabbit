


<div class="modal-dialog">
<div class="modal-content">
<!--Cabeçalho:-->	    


   <div class="modal-header">
     <!--  <button type="button" class="close" data-dismiss="modal" 
       aria-hidden="true">×</button>-->
      
      <h1 class="text-center">Login</h1>
     </div>

<!--Corpo:-->	 


  <div class="modal-body">
           

     {!!Form::open(['route'=>'log.store','method'=>'post'])!!}
      <form class="form col-md-12 center-block">
      <div class="form-group">
          {!!Form::label('correo','Correo')!!}
          {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'ingresa tu correo'])!!}
        
      </div>
     
      <div class="form-group">
        
          {!!Form::label('pass','Clave')!!}
          {!!Form::password('pass',['class'=>'form-control','placeholder'=>'ingresa tu clave'])!!}
        
      </div>
      {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
  <div class="form-group" style="position:relative; top:-3em; left:7em">
          
    @include('layouts.authError')

  </div>
    
    </form>
    </div>


    {!!Form::close()!!}
  
    
  </div>

</div>
</div>

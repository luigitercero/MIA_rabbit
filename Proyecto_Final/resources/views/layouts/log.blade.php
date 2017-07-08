
<<<<<<< HEAD


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
  
    
=======
<div class="modal-dialog">
<div class="modal-content">
<!--Cabeçalho:-->	    
   <div class="modal-header">
     <!--  <button type="button" class="close" data-dismiss="modal" 
       aria-hidden="true">×</button>-->
     <h1 class="text-center">Login</h1>
     </div>

<!--Corpo:-->	 <div class="modal-body">

      <form class="form col-md-12 center-block">
      <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Usuario">
      </div>
      <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="contraseña">
      </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">ingresar</button>
              <span class="pull-right"><a href="#">Registrar</a></span>
              <span><a href="#">necesita ayuda</a></span>

         </div>
      </form>
    </div>
<div class="modal-footer">

 <div class="col-md-12">
   <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>-->
   </div> 
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
  </div>

</div>
</div>

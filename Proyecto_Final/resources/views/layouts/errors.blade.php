 @if(count($errors)>0)
    <div class="col-md-9">
    <div class="alert alert-danger alert-dismissible" role="alert">
    <ul>
      @foreach($errors->all() as $errores)
        <li>{!!$errores!!}</li>
      @endforeach  
    </ul>
      
    </div>
     </div>
@endif
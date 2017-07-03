<table>
    <thead>
        <th>id</th>
        <th>nombre</th>
        @foreach($genero as $generos)
          <tbody>
            <td>{{$generos->cod}}</td>
            <td>{{$generos->nombre}}</td>  
          </tbody>  
            
        @endforeach
    </thead>
</table>
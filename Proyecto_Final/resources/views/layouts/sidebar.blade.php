<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Sidebar
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    @if(Auth::user()->roll_cod != 3)
                    <a href="{{ url('/roll') }}">
                        roll 
                    </a>
                    <a href="{{ url('/genero') }}">
                        genero
                    </a>
                    <a href="{{ url('/usuario') }}">
                        usuario
                    </a>
                    <a href="{{ url('/publicidad') }}">
                        publicidad
                    </a>
                    @endif
                    <a href="{{ url('/home') }}">
                        sistema de Archivos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
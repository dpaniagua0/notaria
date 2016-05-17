<!-- Second navbar -->
<div class="navbar navbar-default" id="navbar-second">
  <ul class="nav navbar-nav no-border visible-xs-block">
    <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
  </ul>

  <div class="navbar-collapse collapse" id="navbar-second-toggle">
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/home') }}"><i class="icon-display4 position-left"></i> Inicio</a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Roles <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('roles.index') }}"><i class="icon-eye"></i> Ver roles</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('roles.create') }}"><i class="icon-plus3"></i> Agregar rol</a>
            </li>
        </ul>


        </a>
      </li> 

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Usuarios <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('users.index') }}"><i class="icon-eye"></i> Ver usuarios</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('users.create') }}"><i class="icon-plus3"></i> Agregar usuario</a>
            </li>
        </ul>


        </a>
      </li> 

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Conceptos <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('conceptos.index') }}"><i class="icon-eye"></i> Ver conceptos</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('conceptos.create') }}"><i class="icon-plus3"></i> Agregar concepto</a>
            </li>
        </ul>


        </a>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Escrituras <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('escrituras.index') }}"><i class="icon-eye"></i> Ver escrituras</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('escrituras.create') }}"><i class="icon-plus3"></i> Agregar escritura</a>
            </li>
        </ul>
        </a>
      </li>  

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Servicios <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('servicios.index') }}"><i class="icon-eye"></i> Ver servicios</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('servicios.create') }}"><i class="icon-plus3"></i> Agregar servicio</a>
            </li>
        </ul>
        </a>
      </li>  
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Documentos <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li>
              <a href="{{ route('documentos.index') }}"><i class="icon-eye"></i> Ver documentos</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('documentos.create') }}"><i class="icon-plus3"></i> Agregar documentos</a>
            </li>
        </ul>
        </a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Declaranots <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ route('declaranots.index') }}"><i class="icon-eye"></i> Ver declaranots</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ route('declaranots.create') }}"><i class="icon-plus3"></i> Agregar declaranot</a>
          </li>
        </ul>
        </a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Declaranots Privados<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ route('declaranotspriv.index') }}"><i class="icon-eye"></i> Ver declaranots privados</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ route('declaranotspriv.create') }}"><i class="icon-plus3"></i> Agregar declaranot privados</a>
          </li>
        </ul>
        </a>
      </li>

    </ul>

    
  </div>
</div>
<!-- /second navbar -->

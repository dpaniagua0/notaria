
<!-- Main navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.html">Notaria Pública</a>

    <ul class="nav navbar-nav pull-right visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
    </ul>
  </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">
  
    <ul class="nav navbar-nav navbar-right">
      

    <!--  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-bubbles4"></i>
          <span class="visible-xs-inline-block position-right">Messages</span>
          <span class="badge bg-warning-400">2</span>
        </a>

        <div class="dropdown-menu dropdown-content width-350">
          <div class="dropdown-content-heading">
            Messages
            <ul class="icons-list">
              <li><a href="#"><i class="icon-compose"></i></a></li>
            </ul>
          </div>

          <ul class="media-list dropdown-content-body">
            <li class="media">
              <div class="media-left">
                <img src="{{ asset('images/demo/users/face10.jpg')}}" class="img-circle img-sm" alt="">
                <span class="badge bg-danger-400 media-badge">5</span>
              </div>

              <div class="media-body">
                <a href="#" class="media-heading">
                  <span class="text-semibold">James Alexander</span>
                  <span class="media-annotation pull-right">04:58</span>
                </a>

                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
              </div>
            </li>

          

         

           
          </ul>

          <div class="dropdown-content-footer">
            <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
          </div>
        </div>
      </li> -->

      <li class="dropdown dropdown-user">
        <a class="dropdown-toggle" data-toggle="dropdown">
         <!-- <img src="{{ asset('images/demo/users/face11.jpg')}}" alt=""> -->
          <span>{{ Auth::user()->name }}</span>
          <i class="caret"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
          <li><a href="{{ url('/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
  <!-- /main navbar -->
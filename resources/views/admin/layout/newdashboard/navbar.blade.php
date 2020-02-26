<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      {{--<li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>--}}
    </ul> 

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div href="#" class="dropdown-item">
              <h6> {{Auth::user()->email}}</h6>
          </div>
          <div class="dropdown-divider"></div>
          <a href="/logout" class="dropdown-item dropdown-footer">logout</a>
        </div>
      </li>
      
      {{-- <li class="dropdown">
      <a href="#" data-toggle="dropdown"><img class="user-dp" src="{{asset('img/avatar.png')}}" alt="user">
            </a>
        <ul class="dropdown-menu">
            <li>
                <div class="navbar-content">
                <span> {{Auth::user()->name}}</span>
                    <p class="text-muted small">
                      {{Auth::user()->email}}
                    </p>
                    <div class="divider">
                    </div>
                    <a href="#" class="view btn-sm active">View Profile</a>
                </div>
            </li>
        </ul>
    </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<header id="header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="/">
                <img class="logo" src="{{asset('images/logo.svg')}}" alt="image" />
                <img class="logo-stiky" src="{{asset('./images/test.svg')}}" alt="logo-stiky"/>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link {{  Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  Request::is('aboutus') ? 'active' : '' }} " href="/aboutus">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  Request::is('services*') ? 'active' : '' }}" href="{{url('/services')}}">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div> 
    </header>
    
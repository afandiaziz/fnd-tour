<div class="container">
   <nav class="row navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ url('') }}">
         <img src="{{ url('assets/img/Logo.png') }}" alt="FND Tour - Logo">
      </a>
      <button class="navbar-toggler waves-effect border-0" type="button" data-toggle="collapse"
         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon border-0"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2 active">
               <a class="nav-link" href="{{ url('') }}">Home</a>
            </li>
            <li class="nav-item mx-md-2">
               <a class="nav-link" href="javascript:void(0)">Travel Package</a>
            </li>
            <li class="nav-item mx-md-2 dropdown">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:void(0)">VISA</a>
                  <a class="dropdown-item" href="javascript:void(0)">Passport</a>
               </div>
            </li>
            <li class="nav-item mr-md-4">
               <a class="nav-link" href="javascript:void(0)">Testimonials</a>
            </li>
            @guest
            <form class="form-inline d-sm-block d-md-none">
               <button class="btn btn-login my-2 my-sm-0 waves-effect" type="button" onclick="location.href='{{ url('login') }}'">
                  Sign In
               </button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
               <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 waves-effect" type="button" onclick="location.href='{{ url('login') }}'">
                  Sign In
               </button>
            </form>
            @endguest
            @auth
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
               @csrf
               <button class="btn btn-login my-2 my-sm-0 waves-effect" type="submit">
                  Sign Out
               </button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
               @csrf
               <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 waves-effect" type="submit">
                  Sign Out
               </button>
            </form>
            @endauth
         </ul>
      </div>
   </nav>
</div>

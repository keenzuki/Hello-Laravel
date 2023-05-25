<nav class="navbar navbar-expand-lg bg-body-tertiary bg-gray-300">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/dashboard')}}">Booking</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Comp</a></li>
             </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          
        </ul>
        <ul class="navbar-nav float-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Profile') }}</a></li>
              <li> <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="dropdown-item" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form></li>

             </ul>
          </li>
        </ul>
        </div>
    </div>
    
  </nav>
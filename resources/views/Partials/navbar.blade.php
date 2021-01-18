  <nav class="navbar-left navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Bart Van Cutsem</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ">
                <a class="nav-link"  href="{{ url('/') }}">Home</a>
                {{-- <a class="nav-link"  href="{{ url('/contact') }}">Contact</a> --}}
              </div>
              <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                  <ul class="navbar-nav ml-auto">
                      @if (Route::has('login'))
                          @auth
                              <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                                class="nav-link">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                          @else
                              <a href="{{ route('login') }}" class="nav-link">Login</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="nav-link">Register</a>
                              @endif
                          @endauth
                      @endif
                  </ul>
              </div>
          </div>
      </div>
  </nav>

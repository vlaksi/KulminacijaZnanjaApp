<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
  <div class="container">
      <a class="navbar-brand" href="#">KULMINACIJA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      {{-- <ul class="navbar-nav mr-auto">

      </ul> --}}
      <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="/"> Pocetna </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/#ideja">Ideja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#nastanak">Nastanak</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="/#tim">Tim</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="/#cilj">Cilj</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#kontakt">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Blog</a>
          </li>
        </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <a class="dropdown-item" href="/dashboard"> Dashboard </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
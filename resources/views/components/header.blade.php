<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black">
    <a class="navbar-brand font-weight-bold" href="/">Coding Forums</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-house-door " viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                    </svg> <span class="sr-only">(current)</span></a>
            </li>
            

        </ul>
        <form method="GET" action="/search/results" class="form-inline my-2 my-lg-0">
           
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn  my-2 my-sm-0 " type="submit"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20"  fill="white" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>

        </form>
        <div class="d-flex">
            @if (Route::has('login'))
            @auth
            <div class="container  nav-item dropdown">
                <svg class="mx-3 nav-link dropdown-toggle p-0" id="useroption" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                    fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="useroption">
                    <a class="dropdown-item disabled font-weight-bold" style="color: black" href="#">
                        <h4> {{ Auth::user()->name }}</h4>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/dashboard') }}">
                        <h6>Dashboard</h6>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

            @else
            <a href="{{ route('login') }}" class="btn btn-lg  text-white font-weight-bold mx-2" >Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn  btn-lg text-white  font-weight-bold">Register</a>
            @endif
            @endauth
            @endif
        </div>

    </div>

</nav>
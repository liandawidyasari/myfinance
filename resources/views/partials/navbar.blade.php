<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Finance</a>
    @auth
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link {{ ( "Home") ? 'active' : '' }}"  href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ ( "Table") ? 'active' : '' }}" href="/table">Finance</a></li>
        {{-- <li class="nav-item"><a class="nav-link {{ ( "Finance") ? 'active' : '' }}" href="/finance">Finance</a></li> --}}

        <ul class="navbar-nav ms-auto">
            
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hai Now u see me, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arror-right"></i>Logout</button>
                        </form>
              </li>
            </ul>
          </li>
            
        @else
            {{-- < class="nav-item"> --}}
              <a class="nav-link {{ ("Login") ? 'active' : '' }}" href="/"></a>
            
          </ul>
        @endauth

      </ul>
    </div>
  </div>
</nav>
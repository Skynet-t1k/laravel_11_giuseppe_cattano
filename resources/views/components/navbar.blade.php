<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}"><img class="logo imgfluid" src="/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link  {{Route::is('welcome') ? "active" : ""}}" href="{{route('welcome')}}">Home</a>
        <a class="nav-link {{Route::is('games.index') ? "active" : ""}}" href="{{route('games.index')}}">ViewGames</a>
        <a class="nav-link {{Route::is('games.create') ? "active" : ""}}" href="{{route('games.create')}}">AddGame</a>
      </div>
    
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        @auth
        {{Auth::user()->name}}
        @endauth
        @guest
        Accedi/Registrati
        @endguest
      </a>
      <ul class="dropdown-menu ms-3 mt-2">
        
        @guest
        
        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
        
        @endguest
        
        @auth
        
        <form class="dropdown-item" 
        action="{{route('logout')}}"
        method="POST"
        >@csrf
        <button class="dropdown-item p-0 ">Logout</button>
      </form>
      
      @endauth
      
    </ul>
  </div>
</div>
</div>
</nav>
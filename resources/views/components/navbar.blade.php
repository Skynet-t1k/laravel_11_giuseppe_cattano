<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}"><img class="logo imgfluid" src="/img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link" href="{{route('welcome')}}">Home</a>
          <a class="nav-link" href="{{route('games.index')}}">ViewGames</a>
          <a class="nav-link" href="{{route('games.create')}}">AddGame</a>
        </div>
      </div>
      <div class="logo1"></div>
    </div>
  </nav>
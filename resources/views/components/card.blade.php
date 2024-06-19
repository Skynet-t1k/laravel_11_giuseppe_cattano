


<div class="card shadow m-3 text-center" style="width: 18rem;">
    <img src="{{Storage::url($game->img)}}" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$game->name}}</h5>
      <p class="card-text">{{$game->review}}</p>
      <div class="d-flex justify-content-center align-items-center">
      <a href="{{route('games.show', compact('game'))}}" class="btn btn-secondary mt-auto">View</a>
      <a href="{{route('games.edit', compact('game'))}}" class="btn btn-warning mt-auto mx-2">Edit</a>
      <form action="{{route('games.destroy', compact('game'))}}" class="mt-auto" method="POST" onsubmit="return confirm('Stai per cancellare questo Game vuoi procedere?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
    </div>
</div>
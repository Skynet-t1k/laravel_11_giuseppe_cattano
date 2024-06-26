



<div class="card shadow m-3 text-center" style="width: 22rem; height: 34rem; display: flex; flex-direction: column;">
  <img src="{{ Storage::url($game->img) }}" class="card-img-top img-fluid" alt="..." style="max-height: 50%; object-fit: cover;">
  <div class="card-body d-flex flex-column">
    <h3 class="card-title">{{ $game->name }}</h3>
    <h5 class="card-title">Creato da {{ $game->user->name}}</h5>
    <p class="card-text">{{ $game->review }}</p>
    <div class="mt-auto">
      <a href="{{ route('games.show', compact('game')) }}" class="pt-2 btn btn-secondary">View</a>
      <a href="{{ route('games.edit', compact('game')) }}" class="pt-2 btn btn-warning mx-2">Edit</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="pt-2 btn btn-danger">Delete</a>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Game</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Stai per cancellare il Game, questa azione e' irreversibile!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{route('games.destroy', compact('game'))}}" class="" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
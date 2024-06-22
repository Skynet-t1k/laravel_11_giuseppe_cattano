<x-layout>
  
  
  <h1 class="mt-150 text-white text-shadow text-center">Edit Game</h1>
  <x-errandsuc />
  
  
  <form 
  method="POST" 
  action="{{route('games.update', compact('game'))}}"
  class="bg-body-secondary p-3 rounded-4 shadow mt-5 form"
  enctype="multipart/form-data">
  @csrf
  @method("PUT")
  <div class="mb-3">
    <label for="name" class="form-label">Game</label>
    <input name="name" type="text" value="{{$game->name}}" class="form-control shadow" id="username">
  </div>
  <div class="mb-3">
    <label for="review" class="form-label">Review</label>
    <textarea class="form-control shadow" name="review" id="review" cols="60" rows="10">{{$game->review}}</textarea>
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Carica un immagine (opzionale)</label>
    <input name="img" class="form-control shadow" type="file" id="img">
  </div>
  <div class="w-100 d-flex flex-column align-items-center">
    <h3>Immagine Attuale</h3>
    <img src="{{Storage::url($game->img)}}" class="img-fluid" style="width: 32rem; height: 22rem" alt="...">
  </div>
  <div class="d-flex align-items-center mt-3">
    <button type="submit" class="btn btn-warning shadow me-2">Salva</button>
    <a href="{{ route('games.index') }}" class="shadow p-2 btn btn-secondary">Cancel</a>
</div>

</form>


</x-layout>
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
        <button type="submit" class="btn btn-secondary shadow mt-3">Salva</button>

    </form>

  



</x-layout>
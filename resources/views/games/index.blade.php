<x-layout>

    <x-errandsuc />
    

    <h1 class="my-5 text-white text-shadow text-center">Games List</h1>
    <div class="row flex-row">
    @foreach ($games as $game)
    <div class="col12 col-md-4 d-flex justify-content-center">
    <x-card 
    :$game
    />
    </div>  
    @endforeach

</div>

</x-layout>
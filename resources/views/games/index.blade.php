<x-layout>
    
    <h1 class="mt-150 text-white text-shadow text-center">Games List</h1>
    <x-errandsuc />
    
    <div class="row w-100 d-flex justify-content-center">
        
        @if ($games->isEmpty())
        <h2 class="mt-150 text-white text-shadow text-center">Nessun gioco presente in lista. Sii il primo a inserirne uno!</h2>
        @endif
        
        @foreach ($games as $game)
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-5">
            <x-card 
            :$game
            />
        </div>  
        @endforeach
        
    </div>
    
</x-layout>
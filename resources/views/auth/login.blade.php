<x-layout>
    
    <h1 class="text-center text-white mt-150">Accedi</h1>
    
    <div class="container">
        <x-errandsuc />
    </div>
    
    <form
    action="{{route('login')}}"
    method="POST"
    class="bg-body-secondary p-3 rounded-4 shadow formregistrati"
    >
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-secondary mt-2" style="width: 100px;">Accedi</button>
</form>



</x-layout>
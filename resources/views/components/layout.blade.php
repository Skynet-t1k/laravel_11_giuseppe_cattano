<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Favorite Games</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body>

        

        <div class="background-container">
        
          <x-navbar />

        {{$slot}}
      
   
        <x-footer />
      </div>


  </div>
  </body>
</html>
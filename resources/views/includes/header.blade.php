<header>
    

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="" width="50" height="50"src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item  @if(Route::is('home')) active @endif">
        <a class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item  @if(Route::is('comics')) active @endif">
        <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
      </li>
      
      
      
     
    </ul>
  </div>
</nav>
                
    
</header>
<header>
    <div class="row container">
        <!-- logo + nav links -->
        <div class="col">
          <img src="{{asset('images/dc-logo.png')}}" alt="logo dc" />
        </div>
        <nav class="col">
          <ul class="list-nav">
            {{-- TODO passare i link dinamicamente --}}
            <li><a href="#" class="{{ request()->routeIs('characters') ? 'active' :' '}}">Characters</a></li>
            <li><a href="{{route('comics')}}" class="{{ request()->routeIs('comics') ? 'active' :' '}}">Comics</a></li>
            <li><a href="#" class="{{ request()->routeIs('movies') ? 'active' :' '}}">movies</a></li>
            <li><a href="#" class="{{ request()->routeIs('tv') ? 'active' :' '}}">tv</a></li>
            <li><a href="#" class="{{ request()->routeIs('games') ? 'active' :' '}}">games</a></li>
            <li><a href="#" class="{{ request()->routeIs('collections') ? 'active' :' '}}">collections</a></li>
            <li><a href="#" class="{{ request()->routeIs('videos') ? 'active' :' '}}">videos</a></li>
            <li><a href="#" class="{{ request()->routeIs('fans') ? 'active' :' '}}">fans</a></li>
            <li><a href="#" class="{{ request()->routeIs('news') ? 'active' :' '}}">news</a></li>
            <li><a href="#" class="{{ request()->routeIs('shop') ? 'active' :' '}}">shop</a></li>
          </ul>
        </nav>
      </div>
</header>
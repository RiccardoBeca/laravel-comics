<header>
  <div class="container w-70">
    <div class="logo">
     <img src="{{asset('img/dc-logo.png')}}" alt="DC Logo">
    </div>
    <nav>
      <ul>
        <li>
          <a class="{{ Route::currentRouteName() ==='characters' ? 'active' : '' }}" href="{{ route('characters') }}" href="{{route('characters')}}">CHARACTERS</a>
        </li>
        <li>
          <a class="{{ Route::currentRouteName() ==='home' ? 'active' : '' }}" href="{{ route('home') }}">COMICS</a>
        </li>
        <li>
          <a href="">MOVIES</a>
        </li>
        <li>
          <a href="">TV</a>
        </li>
        <li>
          <a href="">GAMES</a>
        </li>
        <li>
          <a href="">COLLECTIBLES</a>
        </li>
        <li>
          <a href="">VIDEOS</a>
        </li>
        <li>
          <a href="">FANS</a>
        </li>
        <li>
          <a href="">NEWS</a>
        </li>
        <li>
          <a href="">SHOP</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
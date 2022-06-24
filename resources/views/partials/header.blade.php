<header>
    <ul>
        <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                href="{{ route('movies') }}">Movies</a></li>
        <li><a class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"
                href="{{ route('contacts') }}">Contacts</a></li>
        <li><a class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}"
                href="{{ route('about') }}">About</a>
        </li>
    </ul>
</header>

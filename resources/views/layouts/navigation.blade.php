<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            {{ __('Dashboard') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
        @auth
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        @endauth
    </li>

                    <x-nav-link class="navLinks" :href="route('home.index')"
                        :active="request()->routeIs('home.index')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-link class="navLinks" :href="route('create')"
                        :active="request()->routeIs('create')">
                        {{ __('Create') }}
                    </x-nav-link>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                      
                    </div>
                </li>
            </ul>
            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        
        
        
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

    @if (auth()->user()->role === 'investor' || auth()->user()->role === 'campaigner')
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            {{ __('Dashboard') }}
        </a>
        @else
        <h1>crowdFunding</h1>
        @endif
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


        <a href="{{ route('home.showUser', $campaign->id) }}">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                
                {{ Auth::user()->name }}

              
            </a>

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

                    <x-nav-link class="navLinks" :href="route('home.campaignFilter')"
                        :active="request()->routeIs('home.campaignFilter')">
                        {{ __('Search Campaigns') }}
                    </x-nav-link>


                    <x-nav-link class="navLinks" :href="route('home.profileFilter')"
                        :active="request()->routeIs('home.profileFilter')">
                        {{ __('Search Profiles') }}
                    </x-nav-link>

                    <a href="{{ route('home.showUser') }}">
                    <x-nav-link class="navLinks" >
                        {{ __('See User Profile') }}
                    </x-nav-link>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                      
                    


                    </div>


                 
                </li>
            </ul>
       

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        
        
        
        </div>
    </div>
</nav>
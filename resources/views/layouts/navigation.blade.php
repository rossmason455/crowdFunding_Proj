<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">

     
    

    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav me-auto">

            <x-nav-link class="navLinks" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>



            <x-nav-link class="navLinks" :href="route('home.campaignFilter')"
                        :active="request()->routeIs('home.campaignFilter')">
                        {{ __('Search Campaigns') }}
                    </x-nav-link>


                    <x-nav-link class="navLinks" :href="route('home.profileFilter')"
                        :active="request()->routeIs('home.profileFilter')">
                        {{ __('Search Profiles') }}
                    </x-nav-link>


                 

            </ul>

            <x-nav-link class="navLinks brand-name col-4" :href="route('home.index')"
                        :active="request()->routeIs('home.index')">
                        {{ __('VentureNest') }}
                    </x-nav-link>




                 

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
        @auth


     
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                
                {{ Auth::user()->name }}

              
            </a>

            

            <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </a>
        @else
        <div class="d-flex align-items-center">
        <x-nav-link class="navLinks" :href="route('login')"
                        :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>

                    <x-nav-link class="navLinks" :href="route('register')"
                        :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link>

            </div>
        @endauth
    </li>

              

   

                  

                
                    </a>
                 

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                      
                    


                    </div>


                 
                </li>
            </ul>
       

                     
        
        
        
        </div>
    </div>
</nav>
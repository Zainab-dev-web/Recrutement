<header>
    <!-- Header Start -->
 
   <div class="header-area header_area header-transparent">
        <div class="main-header">
           <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-1 col-md-1">
                            <div class="logo">
                              <a href=""><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">        
                                        <li><a href="{{route('accueil.index')}}">Home</a></li>
                                        <li><a href="{{route('offres.index')}}">Offres</a></li>
                                        <li><a href="{{route('talents.index')}}">Talents</a></li>
                                        <li><a href="{{route('entreprises.index')}}">Entreprises</a></li>
                                        @if(Auth::check() && Auth::user()->role_id ==1)
                                        <li><a href="{{route('admin.index')}}">ADMIN</a></li>
                                        @elseif(Auth::check() && Auth::user()->role_id ==2)
                                        <li><a href="{{route('admin.index')}}">HRT</a></li>
                                        @elseif(Auth::check() && Auth::user()->role_id ==3)
                                        <li><a href="{{route('admin.index')}}">HRE</a></li>
                                        @endif

                                        @if (Auth::check())
                                        
                                   
                                    <li><a href="#">Profil</a>
                                        <ul class="submenu">
                                           
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link" href="{{route('profil.index')}}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->nom }}
                                            </a>
            
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Déconnexion') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            
                                        </li>
                                  
                                        </ul>
                                    </li>
                                    
                                        @else
                                        <li class="nav-item"><a href="{{route('choix.index')}}">Inscription</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>   
                                        @endif
                                        
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="{{route('contact.index')}}" class="btn header-btn">Contact Now</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
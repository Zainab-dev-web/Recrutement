<header>
    <!-- Header Start -->
   <div class="header-area header_area header-transparent">
        <div class="main-header">
           <div class="header-bottom  header-sticky">
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
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/offres">Offres</a></li>
                                        <li><a href="/talents">Talents</a></li>
                                        <li><a href="/entreprises">Entreprises</a></li>
                                        <li><a href="">Login</a>
                                            <ul class="submenu">
                                            <li><a href="{{route('choix')}}">Inscription</a></li>
                                                <li><a href="single-blog.html">Profile</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="/contact" class="btn header-btn">Contact Now</a>
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
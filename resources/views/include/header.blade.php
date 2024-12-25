<header>
            <nav id="nav">
                <div class="container bg-black rounded_50 position-relative main_ahead">
                    <div class="main_heading d-flex justify-content-between align-items-center p-lg-4 px-3">
                        <ul id="navbar"
                            class="m-0 d-flex flex-column list-unstyled flex-lg-row gap-4 gap-xxl-5 mobile_view z_index_7 ps-4 ps-sm-5 pt-5 ps-lg-0 pt-lg-0">
                            <li id="dropdown" class="position-relative">
                                <a href="{{route('home')}}"
                                    class="navline position-relative text-white d-flex align-items-center gap-2">
                                    Home
                                </a>
                            </li>
                            <li><a href="{{route('about')}}" class="navline position-relative text-white ">About
                                    Us</a></li>
                            <li><a href="{{route('contact')}}" class="navline position-relative text-white">Contact Us
                                </a></li>
    
                            <a href="{{route('home')}}" class="site-logo d-lg-block d-none">
                                <img src="{{ asset('public/asset/img/header_logo_kalari.png')}}" alt="" class="header_logo_main"> </a>
    
                            <li><a href="{{route('kalari')}}" class="navline position-relative text-white d-lg-none d-block">Kalari Cheese
                                </a></li>
                            <li id="dropdown" class="position-relative">
                                <a href="{{route('cafe')}}"
                                    class="navline position-relative text-white d-flex align-items-center gap-2 d-lg-none d-block">
                         Cafe
                                </a>
                            </li>
                            <li id="dropdown" class="position-relative">
                                <a href="{{route('franchise')}}"
                                    class="navline position-relative text-white d-flex align-items-center gap-2 d-lg-none d-block">
                                  Frencise
                                </a>
                            </li>
                        </ul>
                        <ul id="navbar"
                            class=" ps-0 m-0 d-flex flex-column list-unstyled flex-lg-row gap-4 gap-xxl-5 justify-content-center align-items-center mobile_view z_index_7">
                            <li><a href="{{route('kalari')}}" class="navline position-relative text-white ">Kalari cheese
                            </a></li>
                            <li id="dropdown" class="position-relative">
                                <a href="{{route('cafe')}}"
                                    class="navline position-relative text-white d-flex align-items-center gap-2">
                                   Cafe
                                </a>
                            </li>
                            <li id="dropdown" class="position-relative">
                                <a href="{{route('franchise')}}"
                                    class="navline position-relative text-white d-flex align-items-center gap-2">
                                  Franchise
                                </a>
                            </li>
                           <div class="main_cart_icon">
                            <li>    
                                <div class="cart_icon">
                               <a href="{{route('cart')}}">  <img src="{{ asset('public/asset/img/shopping-cart.png')}}" alt="search"></a>
                               </div>
                           </li>
                           <li>    
                                <div class="cart_icon">
                                    <a href="{{route('login')}}"> <img src="{{ asset('public/asset/img/user_cart.png')}}" alt="search"></a>
                            </div>
                           </li>
                             
                           </div>
                        </ul>
                        <div id="menubtn-icon" onclick="opennav()"
                            class="d-lg-none z_index_9 pe-2 cursor_pointer menu_icon">
                            <div class="line"></div>
                            <div class="line1 my_6 my-1 mx-auto"></div>
                            <div class="line2"></div>
                        </div>
                        <div class="d-lg-none">
                            <div class="main_cart_icon">
                                <li>    
                                    <div class="cart_icon">
                                    <a href="{{route('login')}}"> 
                                        <img src="{{ asset('public/asset/img/shopping-cart.png')}}" alt="search"></a>
                                   </div>
                               </li>
                               <li>    
                                    <div class="cart_icon">
                                        <a href="{{route('login')}}"> <img src="{{ asset('public/asset/img/user_cart.png')}}" alt="search"></a>
                                </div>
                               </li>
                               </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
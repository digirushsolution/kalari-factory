@extends('include.app')
@section('content')

<section class="kalari_home_banner">
            <div class="slick-slider-banner">
            <div class="element element-3">
                <div class="under_banner_content">
                    <span>Kalari Factory Cafe</span>
                    <h1>Welcome to Kalari Factory Cafe – Where Every Sip is a Delight</h1>
                    <p>Welcome to Kalari Factory Cafe, where every cup of coffee is made with perfection. Enjoy a cozy atmosphere, delicious brews, and freshly baked treats that make every visit a delightful experience.
                    </p>
                    <div class="btn_kalari">
                      <div class="btn_flex_kalri">
                        <a href="#" class="book_a_table" data-bs-toggle="modal" data-bs-target="#exampleModal">Book A Table</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="element element-4">    
                <div class="under_banner_content">
                <span>Kalari Factory Cafe</span>
                <h2>Experience Flavors and Vibes at Kalari Factory Cafe</h2>
                <p>Discover the perfect harmony of taste and ambiance at Kalari Factory Cafe. A place where every bite tells a story and every moment feels special.
                </p>
                <div class="btn_kalari">
                    <div class="btn_flex_kalri">
                      <a href="#" class="book_a_table" data-bs-toggle="modal" data-bs-target="#exampleModal">Book A Table</a>
                    </div>
                  </div>
            </div></div>
              </div>
        </section>

        <section class="about_us py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img_about_kalari">
                            <img src="{{ asset('public/asset/img/cafe_about_page.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about_content">
                            <h2>Redefining the Coffee Shop Experience</h2>
                            <p>At The Kalari Factory Cafe, we don't just make coffee; we craft an experience. Every cup, made with carefully handpicked, sustainably sourced beans and innovative techniques, tells the story of passion and craftsmanship. Ambiance is meant to ignite meaningful connections when friends catch up over cups, dive into great books with a good pen in tow, or brainstorm ideas yet to be unleashed.
                            </p>
                            <p>What makes us unique is our passion for combining tradition with modernity. Besides our signature coffee classics, our menu boasts an exceptional assortment of cultural fusion bites and refreshing beverages that will tantalize every taste bud. A coffee shop should be more than a place to grab a drink; it should be a destination where memories are made and inspiration flows. Every visit to The Kalari Factory Cafe is an extraordinary journey of taste and community.
                                </p>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="special-menu py_8 pt-0">
            <div class="container">
                <div class="heading-section text-center mb-68">
                    <h2>Cafe</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-1.png')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <h3>CAFE AMERICANO </h3>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="21">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-21">0</span>
                                        </div>
                                        <button class="increment" data-product-id="21">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-21">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-2.png')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>ESPRESSO MACCHIATO</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="20">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-20">0</span>
                                        </div>
                                        <button class="increment" data-product-id="20">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-20">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-3.png')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>WHITE CHOCOLATE MOCHA</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="19">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-19">0</span>
                                        </div>
                                        <button class="increment" data-product-id="19">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-19">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-post-1.jpg')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>ICED CAFFE MOCHA</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="18">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-18">0</span>
                                        </div>
                                        <button class="increment" data-product-id="18">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-18">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-post-5.jpg')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>CAPPUCCINO</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="17">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-17">0</span>
                                        </div>
                                        <button class="increment" data-product-id="17">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-17">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
          
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-post-2.jpg')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>VANILLA LATTE</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="16">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-16">0</span>
                                        </div>
                                        <button class="increment" data-product-id="16">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-16">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-post-3.jpg')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>VANILLA LATTE</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="15">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-15">0</span>
                                        </div>
                                        <button class="increment" data-product-id="15">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-15">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special-menu-item ">
                            <div class="image">
                                <img src="{{ asset('public/asset/img/coffee-post-3.jpg')}}" alt="">
                            </div>
                            <div class="content flex-grow">
                                <div class="flex items-center">
                                    <div class="name"><h3>ICED CAFFE MOCHA</h3></div>
                                    <div class="line"></div>
                                    <div class="price">$2.95</div>
                                </div>
                             <div class="btn_add_cart">
                                <p>Espresso shots topped with hot water</p>
                                <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="14">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-14">0</span>
                                        </div>
                                        <button class="increment" data-product-id="14">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-14">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
   
                <div class="checkout_product">
                    <a href="#" class="btn_view_all">Checkout</a>
                </div>
            </div>
            
        </section>

        <div class="discovery-menu py_8">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading_caffee_main">
                                        <span class="sub sub-before sub-after">Discovery Menu</span>
                                        <p>The taste of relaxation</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="discovery-menu-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="content">
                                            <div class="icon">
                                                <div class="cupsss_img">
                                                <img src="{{ asset('public/asset/img/coffee_cup_cafe.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="title"><a href="#">Coffee Menu</a></div>
                                            <p>Explore our rich selection of handcrafted coffees, from bold espressos to creamy lattes. Each cup is made with the finest beans, offering a perfect blend of flavor and warmth for every coffee lover.</p>
                                            <a href="{{route('products')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    <div class="image">
                                            <img src="{{ asset('public/asset/img/coffe_menu1.jpg')}}" alt="">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="discovery-menu-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="content">
                                            <div class="icon">   <div class="cupsss_img">
                                                <img src="{{ asset('public/asset/img/bakery_cafe.png')}}" alt="">
                                            </div></div>
                                            <div class="title"><a href="#">Bakery Menu</a></div>
                                            <p>Indulge in our freshly baked pastries, cakes, and bread with the finest ingredients. From sweet treats to savory delights, every bite promises a delicious experience.
                                            </p>
                                            <a href="{{route('products')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    <div class="image">
                                            <img src="{{ asset('public/asset/img/cake_menu2.jpg')}}" alt="">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="discovery-menu-item mb-0 wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="content">
                                            <div class="icon">   
                                                <div class="cupsss_img">
                                                    <img src="{{ asset('public/asset/img/breakfast_cafe.png')}}" alt="">
                                                 </div>
                                             </div>
                                            <div class="title"><a href="#">Breakfast Menu</a></div>
                                            <p>Start your day with our wholesome breakfast menu, featuring hearty dishes and fresh ingredients. From fluffy pancakes to savory eggs, we have the perfect meal to fuel your morning.
                                            </p>
                                            <a href="{{route('products')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    <div class="image">
                                            <img src="{{ asset('public/asset/img/snacks.jpg')}}" alt="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

        <section class="wg-about py_8 pt-0">
            <div class="container full">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap">
                            <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="{{ asset('public/asset/img/about-3.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="heading-section">
                                    <h2 class="sub sub-before wow fadeInUp animated">Coffee Shop Since 2003</h2>
                                </div>
                                <p>Serving expertly crafted coffee since 2003, we've built a legacy of quality and community. Our passion for great coffee and cozy spaces has made us a local favorite. Join us and experience the difference that over 20 years of excellence brings.
                                </p>
                            </div>
                            <div class="hour-opening">
                                <div class="title">HOUR OPENING</div>
                                <ul>
                                    <li>
                                        <div class="day">MONDAY</div>
                                        <div class="line"></div>
                                        <div class="time">7:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">TUESDAY</div>
                                        <div class="line"></div>
                                        <div class="time">7:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">WEDNESDAY</div>
                                        <div class="line"></div>
                                        <div class="time">7:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">THURSDAY</div>
                                        <div class="line"></div>
                                        <div class="time">7:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">FRIDAY</div>
                                        <div class="line"></div>
                                        <div class="time">8:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">SATURDAY</div>
                                        <div class="line"></div>
                                        <div class="time">7:00 &nbsp; -&nbsp; 21:00</div>
                                    </li>
                                    <li>
                                        <div class="day">SUNDAY</div>
                                        <div class="line"></div>
                                        <div class="time active"> CLOSED</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why_choose_us py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="under_content_why">
                        <div class="txt_why_chooseus">
                            <span>Why Choose Us</span>
                            <h2>We want you to enjoy their coffee to the fullest</h2>
                            <p>We're dedicated to ensuring you enjoy every Sip of our coffee. From rich flavors to perfect brews, we bring you the ultimate coffee experience in every cup.
                            </p>

                            <div id="counter">

                                <div class="item">
                                   <h1 class="count" data-number="50">50</h1>
                                   <h3 class="text">Cup Coffee </h3>
                                </div>
                                <div class="item">
                                   <h1 class="count" data-number="15">15</h1>
                                   <h3 class="text">Everday</h3>
                                </div>
                                <div class="item">
                                   <h1 class="count" data-number="40">40</h1>
                                   <h3 class="text">completed</h3>
                                </div>
                                                    
                              </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="choose_img_ones">
                            <img src="{{ asset('public/asset/img/choose_img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="private_event py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="events_images">
                            <img src="{{ asset('public/asset/img/private_event_img.jpg')}}" alt="">
                            <img src="{{ asset('public/asset/img/coffee_cup.png')}}" alt="" class="position_set">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="right_according">
                            <div class="heading_accordian">
                                <span>FAQ</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>

                            <div class="accordian_main">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What types of coffee do you serve at The Kalari Factory Cafe?
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p>We offer many coffee options, including espresso, Americano, cappuccino, lattes, mochas, and more, all made with the finest quality beans. Whether you prefer hot or iced coffee, we have something for every taste.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do you offer any vegan or dairy-free options?
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, we offer a variety of dairy-free alternatives, including almond, soy, and oat milk, so that you can enjoy your favorite coffee beverages without compromise.
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can I book your cafe for private events or parties?
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, we offer the option to book our cafe for private events. Whether a small gathering or a significant celebration, we can provide a unique and comfortable space for your special occasion. Contact us for more details!</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="book_table py_8">
            <div class="container">
                <div class="main_content_table">
                    <h2>Book A Table</h2>
                    <p>Reserve your spot at The Kalari Factory Cafe for a delightful experience. Book a table online and enjoy a relaxing time with delicious food and beverages.
                    </p>
                    <div class="btn_book_table">
                        <a href="#" class="btn_view_all" data-bs-toggle="modal" data-bs-target="#exampleModal" tabindex="0">Reservation</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="wg-banner-coffee py_8">
            <div class="bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12 mb-3">
                            <img class="banner-img wow fadeInUp animated" src="{{ asset('public/asset/img/box-1.jpg')}}" alt="" style="visibility: visible; animation-name: fadeInUp;">
                        </div>
                        <div class="col-xl-3 col-md-6 col-12 mb-3">
                            <div class="wg-banner-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <img class="item-bg" src="{{ asset('public/asset/img/item-4.png')}}" alt="">
                                <div class="icon"><img src="{{ asset('public/asset/img/every_thrusday.png')}}" alt=""></div>
                                <div class="title"><a href="#">10% off every Thursday</a></div>
                                <p>Enjoy a 10% discount every Thursday at The Kalari Factory Cafe! Treat yourself to your favorite coffee or snack while saving on your order.
                                </p>
                                <a class="button-default style-white" href="#">see all offers <i class="icon-arrow-right2"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12 mb-3">
                            <img class="banner-img wow fadeInUp animated" src="{{ asset('public/asset/img/box-2.jpg')}}" alt="" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        </div>
                        <div class="col-xl-3 col-md-6 col-12 mb-3">
                            <div class="wg-banner-item wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <img class="item-bg" src="{{ asset('public/asset/img/item-5.png')}}" alt="">
                                <div class="icon"><img src="{{ asset('public/asset/img/coffee-break.png')}}" alt=""></div>
                                <div class="title"><a href="#">Place to Meet and Work</a></div>
                                <p>The Kalari Factory Cafe is the perfect place to meet, work, and relax. It offers cozy seating, free Wi-Fi, and delicious coffee, making it ideal for business and leisure.
                                </p>
                                <a class="button-default style-white" href="#">Read more <i class="icon-arrow-right2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <section class="ongoing_fees_main benefits_kalari_cheese py_8">
            <div class="container">
               <div class="heading_ongoing">
                   <h2>Brew Your Dream Business with Us</h2>
               </div>
               <div class="row align-items-center">
                   <div class="col-lg-5 col-md-12 col-sm-12">
                       <div class="img_franchise">
                           <img src="{{ asset('public/asset/img/healthy_cheese_mealss.png')}}" alt="">
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="main_howit_works">
                                    <h3>Craft Your Vision with Kalari Factory Cafe</h3>
                                    <p>At Kalari Factory Cafe, we understand that every successful business starts with a dream. We offer a space that fuels your creativity and innovation, helping you bring your business vision to life with every cup of coffee.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="main_howit_works">
                                    <h3>Fuel Your Entrepreneurial Journey</h3>
                                    <p>Let our vibrant environment energize your entrepreneurial spirit. Whether brainstorming ideas or strategizing your next move, Kalari Factory Cafe provides the perfect setting to ignite your passion and drive your business forward.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="main_howit_works">
                                    <h3>A Space for Growth and Collaboration</h3>
                                    <p>Kalari Factory Cafe isn't just a cafe; it's a hub for collaboration. With our comfortable atmosphere and community-focused vibe, you'll find the inspiration and connections needed to grow your business.
                                    </p>
                                </div>
                            </div>  
                            <div class="col-md-6 mb-3">
                                <div class="main_howit_works">
                                    <h3>Turning Ideas into Reality, One AsSist a Time</h3>
                                    <p>We support your journey from conceptualizing your business plan to executing it. Brew your dream business with us and enjoy every step of the process, fueled by our exceptional coffee and creative ambiance.</p>
                                </div>
                            </div>  
                    </div>              
                   </div>
               </div>
            </div>
        </section>

        <section class="testimonial_cafe py_8">
            <div class="container-fluid">
                <div class="testimonial_heading_cafe">
                    <h2>Testimonial</h2>
                    <p>The Kalari Factory Cafe is my favorite spot for work and relaxation. The ambiance is so cozy, and the coffee is delicious. It's a great place to get inspired!</p>
                </div>
                <div class="testimonial-reel">
                    <!-- Testimonial -->
                    <div>

                        <div class="box">

                            <!-- Testimonial Image -->
                            <figure class="image">
                                <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                            </figure>
                            <!-- / Testimonial Image -->

                            <div class="test-component">
                                <!-- Title -->
                                <article class="test-title">

                                    <h4>
                                        Aliya S., Entrepreneur
                                    </h4>

                                </article>
                                <!-- / Title -->

                                <article class="test-content">
                                    <p>I love the vibe here! It's perfect for meetings and catching up with friends. The coffee is always top-notch, and the staff is incredibly friendly. I highly recommend it!
                                    </p>
                                </article>

                            </div>

                        </div>

                    </div>
                    <!-- / Testimonial -->

                    <!-- Testimonial -->
                    <div>

                        <div class="box">

                            <!-- Testimonial Image -->
                            <figure class="image">
                                <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                            </figure>
                            <!-- / Testimonial Image -->

                            <div class="test-component">
                                <!-- Title -->
                                <article class="test-title">

                                    <h4>
                                        Manoj R., Business Consultant

                                    </h4>

                                </article>
                                <!-- / Title -->

                                <article class="test-content">
                                    <p>The best place to unwind after a busy day. The food and drinks are excellent, and the atmosphere is always welcoming. I can't wait for my next visit!


                                    </p>
                                </article>

                            </div>

                        </div>

                    </div>
                    <!-- / Testimonial -->

                    <!-- Testimonial -->
                    <div>

                        <div class="box">

                            <!-- Testimonial Image -->
                            <figure class="image">
                                <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                            </figure>
                            <!-- / Testimonial Image -->

                            <div class="test-component">
                                <!-- Title -->
                                <article class="test-title">

                                    <h4>
                                        Manoj R., Business Consultant

                                    </h4>

                                </article>
                                <!-- / Title -->

                                <article class="test-content">
                                    <p>
                                        The best place to unwind after a busy day. The food and drinks are excellent, and the atmosphere is always welcoming. I can't wait for my next visit!

                                    </p>
                                </article>

                            </div>

                        </div>

                    </div>
                    <!-- / Testimonial -->

                    <!-- Testimonial -->
                    <div>

                        <div class="box">

                            <!-- Testimonial Image -->
                            <figure class="image">
                                <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                            </figure>
                            <!-- / Testimonial Image -->

                            <div class="test-component">
                                <!-- Title -->
                                <article class="test-title">

                                    <h4>
                                        Priya M., Freelancer


                                    </h4>

                                </article>
                                <!-- / Title -->
                                <article class="test-content">
                                    <p>Kalari Factory Cafe is the perfect mix of great coffee and a calm, creative space. I always feel recharged after spending time here, whether for work or leisure.
                                    </p>
                                </article>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
         <section class="locations py_8 pt-0">
            <div class="container-fluid">
             <div class="row g-0">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="left">
                        <img src="{{ asset('public/asset/img/coffee-time.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="center">
                        <div class="heading-section text-center mb-35">
                            <span class="sub sub-before sub-after">location</span>
                        </div>
                        <div class="text">call us book a table &amp; delivery:</div>
                        <div class="number-phone"><a href="#">(91+)12345678</a></div>
                        <div class="text s1">information coffee house:</div>
                        <p>W4GM+QJR, Udhampur Bus Stand Rd, Raghunathpura, Udhampur, Jammu and Kashmir 182101</p>
                        <p>PRHX+4M3, Canal Rd, Canal Road, Jammu, Jammu and Kashmir 180007</p>
                        <p>Balongi Rd, Phase 7, Industrial Area, Sector 73, Sahibzada Ajit Singh Nagar, Punjab 140308</p>
                        <p><a href="#">info@gmail.com</a></p>
                        <p>Mon - Fri : 9.00am - 22.00pm, Holidays : Close</p>
                        <a href="#" class="button-style-2 m-auto">GET DIRECTIONS</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="right relative">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aZpM6e7HFnRmfFRbJs6qrd6MPI0X2uw&ehbc=2E312F&noprof=1"></iframe>
                    </div>
                </div>
             </div>
            </div>
        <div class="wg-coffee-time">
       
        
    
        </div>
          </section>
          @endsection
     
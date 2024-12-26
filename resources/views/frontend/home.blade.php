@extends('include.app')
@section('content')


<section class="kalari_home_banner">
    <div class="slick-slider-banner">
        <div class="element element-1">
            <div class="under_banner_content">
                <span>Welcome to The Kalari Factory</span>
                <h1>Discover the Authentic Taste of Kalari Cheese – A Taste of Dogra Tradition</h1>
                <p>Indulge in the rich, creamy flavor of Kalari cheese, crafted with care and tradition from the heart
                    of Dogra culture.
                </p>
                <div class="btn_kalari">
                    <div class="btn_flex_kalri">
                        <a href="
                        {{route('kalari')}}" class="btn_view_all">Buy Kalari Online</a>
                        <a href="
                        {{route('franchise')}}" class="book_a_table">Franchise</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="element element-2">
            <div class="under_banner_content">
                <span>Welcome to The Kalari Factory Cafe
                </span>
                <h2>Savor the Magic of Kalari Cheese – A Fusion of Flavor and Tradition
                </h2>
                <p>Experience the perfect blend of authentic Kalari cheese with our innovative cafe creations.
                    Deliciously handcrafted for your taste buds.
                </p>
                <div class="btn_kalari">
                    <div class="btn_flex_kalri">
                        <a href="{{route('kalari')}}" class="btn_view_all">Buy Kalari Online</a>
                        <a href="{{route('franchise')}}" class="book_a_table">Franchise</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="element element-8">
            <div class="under_banner_content">
                <span>Join The Kalari Factory Family
                </span>
                <h2>Bring the Taste of Dogra Tradition to Your City
                </h2>
                <p>Partner with us to deliver authentic Kalari cheese delights. A proven business model celebrating
                    culture, taste and success.
                </p>
                <div class="btn_kalari">
                    <div class="btn_flex_kalri">
                        <a href="{{route('kalari')}}" class="btn_view_all">Buy Kalari Online</a>
                        <a href="{{route('franchise')}}" class="book_a_table">Franchise</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_us py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="img_about_kalari">
                    <img src="{{ asset('public/asset/img/factory_jammu.jpg')}}" alt="" class="kalari_about_home">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about_content">
                    <h2>About Us</h2>
                    <p>The Kalari Factory is an entrepreneurial initiative working towards promoting the rich Dogra
                        culture through traditional foods, ingredients, cuisines, and local arts.
                    </p>
                    <p>Through this correspondence, we would also like to draw your attention towards our two Cafes and
                        restaurants in Udhampur and Jammu districts. Among the fare offered at the cafes is Kalari, a
                        traditionally ripened Himalayan cheese, indigenous to Udhampur. This traditional Dogra cheese is
                        often made of cow's or goat's milk . Moreover, the cafes have also been actively promoting local
                        art and artists demonstrating the Dogra heritage. we believe in employing local people as much
                        as possible and therefore we have been directly and indirectly providing employment to many
                        families from where we source our Kalaris and also to the artists who display their art at our
                        cafes for anyone to buy it . We believe Kalaris should be sourced from the people who kept this
                        art of making the tastiest cheese in the world alive.
                    </p>
                    <p>This is one of the reasons we were also featured on govt.'s "Atma NirbharBharat" digital paper
                        along with other national news channels.</p>
                    <p>Our motto also is to accelerate the production of Kalari in the villages of the region.</p>
                    <p>We hereby request you to provide us with a suitable counter/ outlet where we can sell our
                        delicacies. We hope you will look into this to provide us with this opportunity.</p>
                    <div class="btn_about">
                        <a href="{{route('about')}}" class="btn_view_all">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="coffee_bakery_item">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item fadeInUp animated">
                    <img src="{{ asset('public/asset/img/kalari_cheese (3).jpg')}}" alt="cup-img">
                    <div class="content">
                        <img src="{{ asset('public/asset/img/cheesse_11 (1).png')}}" alt="" class="coffee_sizing">
                        <i class="icon-coffee-cup"></i>
                        <div class="title">
                            <a href="{{route('kalari')}}">Kalari Cheese</a>
                        </div>
                        <p>Savor the rich, creamy taste of Kalari cheese, made from fresh, quality milk for a unique
                            flavor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item fadeInUp animated">
                    <img src="{{ asset('public/asset/img/Cafe.jpg')}}" alt="cup-img">
                    <div class="content">
                        <img src="{{ asset('public/asset/img/cheesse_12.png')}}" alt="" class="coffee_sizing">
                        <i class="icon-coffee-cup"></i>
                        <div class="title">
                            <a href="{{route('cafe')}}">Cafe</a>
                        </div>
                        <p>Relax and enjoy delicious meals, refreshing beverages and cozy vibes at our welcoming cafe
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item fadeInUp animated">
                    <img src="{{ asset('public/asset/img/Franchise (2).jpg')}}" alt="cup-img">
                    <div class="content">
                        <img src="{{ asset('public/asset/img/cheesse_13.png')}}" alt="" class="coffee_sizing">
                        <i class="icon-coffee-cup"></i>
                        <div class="title">
                            <a href="{{route('franchise')}}">Franchise</a>
                        </div>
                        <p>Join our franchise: quality products, strong branding, and dedicated support await you!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special-menu py_8">
    <div class="container">
        <div class="heading-section text-center mb-68">
            <h2>The Kalari Factory</h2>
        </div>

        <div class="flex_divide_sec">
            <div class="main_heading">
                <h3>Raw Kalari Cheese</h3>
            </div>
            <div class="main_heading">
                <h3>Cafe Product</h3>
            </div>
        </div>
        <div class="row">

        <!-- Display Kalari Category Products -->
        <div class="col-lg-6">
            @foreach($kalariProducts as $product)
                <div class="special-menu-item">
                    <div class="image">
                        <img src="{{ asset('public/storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="content flex-grow">
                        <div class="flex items-center">
                            <h3>{{ $product->name }}</h3>
                            <div class="line"></div>
                            <div class="price">${{ $product->price }}</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>{{ $product->description }}</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="{{ $product->id }}">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-{{ $product->id }}">0</span>
                                        </div>
                                        <button class="increment" data-product-id="{{ $product->id }}">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <a href="{{route('cart')}}" tabindex="-1">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                         id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-{{ $product->id }}">0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Display Burger Category Products -->
        <div class="col-lg-6">
            @foreach($burgerProducts as $product)
                <div class="special-menu-item">
                    <div class="image">
                        <img src="{{ asset('public/storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="content flex-grow">
                        <div class="flex items-center">
                            <h3>{{ $product->name }}</h3>
                            <div class="line"></div>
                            <div class="price">${{ $product->price }}</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>{{ $product->description }}</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="{{ $product->id }}">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-{{ $product->id }}">0</span>
                                        </div>
                                        <button class="increment" data-product-id="{{ $product->id }}">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                <a href="{{route('cart')}}" tabindex="-1">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                         id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-{{ $product->id }}">0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



            <!-- <div class="col-lg-6">
                <div class="special-menu-item ">
                    <div class="image">
                        <img src="{{ asset('public/asset/img/coffee-3.png')}}" alt="">
                    </div>
                    <div class="content flex-grow">
                        <div class="flex items-center">
                            <div class="name">
                                <h3>WHITE CHOCOLATE MOCHA</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="3">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-3">0</span>
                                        </div>
                                        <button class="increment" data-product-id="3">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-3">0</span>
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
                            <div class="name">
                                <h3>ICED CAFFE MOCHA</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="4">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-4">0</span>
                                        </div>
                                        <button class="increment" data-product-id="4">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-4">0</span>
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
                            <div class="name">
                                <h3>CAPPUCCINO</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="5">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-5">0</span>
                                        </div>
                                        <button class="increment" data-product-id="5">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-6">0</span>
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
                            <div class="name">
                                <h3>VANILLA LATTE</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="6">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-6">0</span>
                                        </div>
                                        <button class="increment" data-product-id="6">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-6">0</span>
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
                            <div class="name">
                                <h3>VANILLA LATTE</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="7">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-7">0</span>
                                        </div>
                                        <button class="increment" data-product-id="7">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-7">0</span>
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
                            <div class="name">
                                <h3>ICED CAFFE MOCHA</h3>
                            </div>
                            <div class="line"></div>
                            <div class="price">$2.95</div>
                        </div>
                        <div class="btn_add_cart">
                            <p>Espresso shots topped with hot water</p>
                            <div class="flx_main_cart">
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button class="decrement" data-product-id="8">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-8">0</span>
                                        </div>
                                        <button class="increment" data-product-id="8">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <a href="{{route('cart')}}"></a>
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-8">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="flex_add_btn_bottom">
            <div class="btn_kalari_price">
                <a href="{{route('kalari')}}" class="btn_view_all">Read More</a>
            </div>
            <div class="btn_kalari_price">
                <a href="{{route('cafe')}}" class="btn_view_all">Read More</a>
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
                        <span>Why Choose Us

                        </span>
                        <h2>Why The Kalari Factory is the Best Choice for You</h2>
                        <p>At The Kalari Factory, we bring the rich tradition of Kalari cheese to your table, blending
                            heritage with innovation. Our commitment to quality ensures authentic flavors and
                            unforgettable experiences at every step. While we are cozy cafes in Jammu and Udhampur, we
                            aim for expansion opportunities that help link communities through unique offerings. We
                            partner with local artisans not only to preserve a tradition but also to further sustainable
                            livelihoods.

                        </p>

                        <div id="counter">
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter1.png')}}" alt="">
                                </div>
                                <h1 class="count" data-number="50"></h1>
                                <h3 class="text">Women Empowered</h3>
                            </div>
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter2.png')}}" alt="">
                                </div>
                                <h1 class="count" data-number="15"></h1>
                                <h3 class="text">Satisfaction</h3>
                            </div>
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter3.png')}}" alt="">
                                </div>
                                <h1 class="count" data-number="40"></h1>
                                <h3 class="text">Natural Ingredients</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="choose_img_ones">
                    <img src="{{ asset('public/asset/img/choose_kalari11.JPEG')}}" alt="">
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
                    <img src="{{ asset('public/asset/img/kalarii_abb.jpg')}}" alt="">
                    <!-- <img src="img/coffee_cup.png" alt="" class="position_set"> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="right_according">
                    <div class="heading_accordian">
                        <span class="health_main">Health Benefits</span>
                        <h2>Health Benefits By Jammu Special Kalari Cheese</h2>
                        <p>Jammu’s special Kalari cheese is not only delicious but also offers multiple health benefits.
                            It is rich in protein, promoting muscle growth and repair. The cheese also provides
                            essential vitamins and minerals that boost immunity, helping your body fight infections.
                            Additionally, Kalari cheese is a great source of calcium, which supports bone and dental
                            health. Enjoying this traditional cheese adds both flavor and nutrition to your diet, making
                            it a healthy choice for cheese lovers!

                        </p>
                    </div>

                    <div class="accordian_main">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        High in Protein
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> <strong> It contains protein that supports muscle building and repair.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Boosts Immunity
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> <strong>Packed with essential vitamins and minerals, it strengthens your
                                                immunity system.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Bone Health
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> <strong>High calcium content in Kalari cheese ensures healthy bones and
                                                strong teeth.
                                        </p>
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

<section class="testimonial_section py_8">
    <div class="container">
        <div class="heading_testimonial">
            <span>Customer Testimonial</span>
            <h2>What Customer Say</h2>
        </div>

        <div class="width_testimonial">
            <div class="under_testimonial_content">
                <div class="main_content_testimonial">
                    <p>I tried Kalari cheese for the first time at The Kalari Factory, and it was an unforgettable
                        experience. The cheese was fresh, creamy, and full of flavor. It’s truly a taste of tradition.
                    </p>
                    <h3>Ravi K.
                    </h3>
                </div>
                <div class="main_content_testimonial">
                    <p>As a cheese lover, I was amazed by the quality and taste of Kalari cheese here. It’s unlike
                        anything I’ve had before. The flavors are rich and authentic – a must-try.</p>
                    <h3>Neha S.</h3>
                </div>
                <div class="main_content_testimonial">
                    <p>I recently visited their Jammu café, and the Kalari cheese was exceptional! The team at The
                        Kalari Factory has truly mastered this delicious regional delicacy. Highly recommend it to
                        anyone.</p>
                    <h3>Amit P.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wg-coffee-post py_8">
    <div class="left">
        <div class="coffee-post-item">
            <div class="image">
                <img src="{{ asset('public/asset/img/coffee-post-1.jpg')}}" alt="">
            </div>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                    height="19" viewBox="0 0 18 19">
                    <image data-name="" width="18" height="19"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAYAAACdkl3yAAAA2klEQVQ4jaWUYRHDIAyFEwm1gIVaqIVZmAUs1EItYGEWOglUQifh7bhLOso4SLf3O3z3krzAZBCAgYhGqdyYebO8OwTgDiDgWysAZwGMUtySt7joaZd2/4IkeXGdgPuvkCD1ees3hTih95QeDwCW0qGCHgbIIhBfa1U31FJU6xUnn9YAzA2IFxdTJw5DOTTVLk5dw4Uq6HxKxcyFZQFTDaROrFGY8/yc8mAYvmo9pTtbp643XoZUTqSWkWsQAfWG2774wlEJS62mrDX/n+oPeayU6MXMz64DInoDudWQDThTKWgAAAAASUVORK5CYII=">
                    </image>
                </svg>
                <div class="name"><a href="#">- Happy day coffee -</a></div>
                <p>Flavours</p>
            </div>
        </div>
    </div>
    <div class="center">
        <div class="coffee-post-item">
            <div class="image">
                <img src="{{ asset('public/asset/img/coffee-post-2.jpg')}}" alt="">
            </div>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                    height="19" viewBox="0 0 18 19">
                    <image data-name="" width="18" height="19"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAYAAACdkl3yAAAA2klEQVQ4jaWUYRHDIAyFEwm1gIVaqIVZmAUs1EItYGEWOglUQifh7bhLOso4SLf3O3z3krzAZBCAgYhGqdyYebO8OwTgDiDgWysAZwGMUtySt7joaZd2/4IkeXGdgPuvkCD1ees3hTih95QeDwCW0qGCHgbIIhBfa1U31FJU6xUnn9YAzA2IFxdTJw5DOTTVLk5dw4Uq6HxKxcyFZQFTDaROrFGY8/yc8mAYvmo9pTtbp643XoZUTqSWkWsQAfWG2774wlEJS62mrDX/n+oPeayU6MXMz64DInoDudWQDThTKWgAAAAASUVORK5CYII=">
                    </image>
                </svg>
                <div class="name"><a href="#">- Happy day coffee -</a></div>
                <p>Flavours</p>
            </div>
        </div>
        <div class="coffee-post-item">
            <div class="image">
                <img src="{{ asset('public/asset/img/coffee-post-3.jpg')}}" alt="">
            </div>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                    height="19" viewBox="0 0 18 19">
                    <image data-name="" width="18" height="19"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAYAAACdkl3yAAAA2klEQVQ4jaWUYRHDIAyFEwm1gIVaqIVZmAUs1EItYGEWOglUQifh7bhLOso4SLf3O3z3krzAZBCAgYhGqdyYebO8OwTgDiDgWysAZwGMUtySt7joaZd2/4IkeXGdgPuvkCD1ees3hTih95QeDwCW0qGCHgbIIhBfa1U31FJU6xUnn9YAzA2IFxdTJw5DOTTVLk5dw4Uq6HxKxcyFZQFTDaROrFGY8/yc8mAYvmo9pTtbp643XoZUTqSWkWsQAfWG2774wlEJS62mrDX/n+oPeayU6MXMz64DInoDudWQDThTKWgAAAAASUVORK5CYII=">
                    </image>
                </svg>
                <div class="name"><a href="#">- Happy day coffee -</a></div>
                <p>Flavours</p>
            </div>
        </div>
        <div class="coffee-post-item">
            <div class="image">
                <img src="{{ asset('public/asset/img/coffee-post-4.jpg')}}" alt="">
            </div>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                    height="19" viewBox="0 0 18 19">
                    <image data-name="" width="18" height="19"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAYAAACdkl3yAAAA2klEQVQ4jaWUYRHDIAyFEwm1gIVaqIVZmAUs1EItYGEWOglUQifh7bhLOso4SLf3O3z3krzAZBCAgYhGqdyYebO8OwTgDiDgWysAZwGMUtySt7joaZd2/4IkeXGdgPuvkCD1ees3hTih95QeDwCW0qGCHgbIIhBfa1U31FJU6xUnn9YAzA2IFxdTJw5DOTTVLk5dw4Uq6HxKxcyFZQFTDaROrFGY8/yc8mAYvmo9pTtbp643XoZUTqSWkWsQAfWG2774wlEJS62mrDX/n+oPeayU6MXMz64DInoDudWQDThTKWgAAAAASUVORK5CYII=">
                    </image>
                </svg>
                <div class="name"><a href="#">- Happy day coffee -</a></div>
                <p>Flavours</p>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="coffee-post-item">
            <div class="image">
                <img src="{{ asset('public/asset/img/coffee-post-5.jpg')}}" alt="">
            </div>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                    height="19" viewBox="0 0 18 19">
                    <image data-name="" width="18" height="19"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAYAAACdkl3yAAAA2klEQVQ4jaWUYRHDIAyFEwm1gIVaqIVZmAUs1EItYGEWOglUQifh7bhLOso4SLf3O3z3krzAZBCAgYhGqdyYebO8OwTgDiDgWysAZwGMUtySt7joaZd2/4IkeXGdgPuvkCD1ees3hTih95QeDwCW0qGCHgbIIhBfa1U31FJU6xUnn9YAzA2IFxdTJw5DOTTVLk5dw4Uq6HxKxcyFZQFTDaROrFGY8/yc8mAYvmo9pTtbp643XoZUTqSWkWsQAfWG2774wlEJS62mrDX/n+oPeayU6MXMz64DInoDudWQDThTKWgAAAAASUVORK5CYII=">
                    </image>
                </svg>
                <div class="name"><a href="#">- Happy day coffee -</a></div>
                <p>Flavours</p>
            </div>
        </div>
    </div>
</div>

<section class="cake_bakery_tab py_8 pt-0">
    <div class="container">
        <div class="heading_cake">
            <h2>The Kalari Factory: A Unique Cafe Experience & Exciting Franchise Opportunity</h2>
            <p>Discover The Kalari Factory’s unique blend of local flavors and modern cafe vibes. We offer a promising
                franchise opportunity to expand a growing brand that brings authentic Dogra cuisine to new audiences.
            </p>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">The Kalari Factory</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cafe</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Franchise</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cheese_tab_1.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Exclusive Focus on Kalari Cheese</h3>
                                    <p>The Kalari Factory specializes in the unique Dogra delicacy, Kalari cheese,
                                        offering a variety of innovative dishes like Kalari momos, pizzas, and
                                        sandwiches that can’t be found in traditional cafés.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cheese_tab_2.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Fusion of Tradition and Modernity</h3>
                                    <p> By combining regional Dogra flavors with contemporary cafe dining, The Kalari
                                        Factory creates a one-of-a-kind culinary experience that introduces traditional
                                        Jammu and Kashmir recipes in a fresh, innovative way.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cheese_tab_3.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Cultural Integration</h3>
                                    <p>The cafe celebrates the rich heritage of Jammu and Kashmir, not only through its
                                        food but by displaying local artwork and supporting regional farmers, making it
                                        a cultural hub that showcases local pride in every aspect</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cafe_hometab1.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Authentic Regional Flavors</h3>
                                    <p>The Kalari Factory offers a distinctive menu inspired by the Dogra region,
                                        featuring rare ingredients and traditional recipes like Kalari cheese, allowing
                                        customers to taste authentic flavors of Jammu and Kashmir in a modern café
                                        setting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cafe_hometa2.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Creative Menu Offerings</h3>
                                    <p>The cafe reimagines classic regional dishes, like Kalari cheese momos and pizzas,
                                        blending them with contemporary culinary trends to create bold, innovative
                                        flavors that set it apart from typical cafes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/cafe_hometab3.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Community-Centered Experience</h3>
                                    <p>The Kalari Factory goes beyond just being a coffee shop by exhibiting local
                                        artwork and supporting local farmers and thereby making it a hub for the patrons
                                        to associate with the heritage and traditions of Jammu and Kashmir.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/frenchise_restudent1.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Imagine Your Future</h3>
                                    <p>Imagine your future as part of a local cafe concept that celebrates your regional
                                        food, offering the possibility to create a successful business with a strong
                                        brand presence in your region.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/frenchise_restudent2.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Evaluate Your Passion and Skill Set</h3>
                                    <p>Reflect on your passion for food, business operations, and cultural promotion and
                                        ensure that it aligns with the mission of The Kalari Factory to offer
                                        exceptional regional culinary experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="nav_tab_under">
                                <div class="img_tab">
                                    <img src="{{ asset('public/asset/img/frenchise_restudent3.jpg')}}" alt="">
                                </div>
                                <div class="content_tab">
                                    <h3>Quantify Your Investment and Risk Level</h3>
                                    <p>Consider the financial commitment, initial setup costs, and long-term
                                        profitability, balancing investment with potential returns for a sustainable
                                        business venture.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video_testimonial_main py_8">
    <div class="container">
        <div class="video_heading_main">
            <h2>Customer Testimonial</h2>
        </div>
        <div class="video_slide_main">
            <div class="item">
                <div class="video">
                    <img src="{{ asset('public/asset/img/video_popup_1.JPEG')}}" alt="">
                    <div class="under_video">
                        <button class="play-button"
                            onclick="openVideoPopup('https://www.youtube.com/embed/OAm_GUdXBaI')">
                            <i class="fas fa-play-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="video">
                    <img src="{{ asset('public/asset/img/video_popup_2.JPEG')}}" alt="">
                    <div class="under_video">
                        <button class="play-button"
                            onclick="openVideoPopup('https://www.youtube.com/embed/OAm_GUdXBaI')">
                            <i class="fas fa-play-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="video">
                    <img src="{{ asset('public/asset/img/video_popup_3.JPEG')}}" alt="">
                    <div class="under_video">
                        <button class="play-button"
                            onclick="openVideoPopup('https://www.youtube.com/embed/OAm_GUdXBaI')">
                            <i class="fas fa-play-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="video">
                    <img src="{{ asset('public/asset/img/video_popup_1.JPEG')}}" alt="">
                    <div class="under_video">
                        <button class="play-button"
                            onclick="openVideoPopup('https://www.youtube.com/embed/OAm_GUdXBaI')">
                            <i class="fas fa-play-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Popup -->
<div id="video-popup" class="video-popup">
    <div class="video-popup-content">
        <span class="close-button" onclick="closeVideoPopup()">&times;</span>
        <iframe id="video-frame" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


<!-- <section id="marquee">
            <div class="container">
               <div class="pic-container">
                  <div class="pic">
                     <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                      <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                       <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                      <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                       <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                      <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                       <img src="img/logo_marqu.png" alt="">
                  </div>
                  <div class="pic">
                    <img src="img/logo_marqu.png" alt="">
                  </div>
               </div>
            </div>
         </section> -->

<section class="private_event py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="events_images">
                    <img src="{{ asset('public/asset/img/accordian_imagep31.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="right_according">
                    <div class="heading_accordian">

                        <h2>Frequently asked questions </h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam atque quisquam quod
                            consequuntur eos illum officiis consequatur eius laudantium rem, asperiores ducimus debitis,
                        </p>
                    </div>

                    <div class="accordian_main">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is special about Kalari cheese?

                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> <strong>Kalari cheese is a traditional delicacy of Dogra and known for its
                                                chewy texture and rich flavor, cultural heritage. It is a piece of art
                                                made by precision and tradition. Here lies its uniqueness in taste with
                                                its foundation in Dogra cuisine.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is Kalari cheese available online?

                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Yes, The Kalari Factory is a website that allows you to shop online. You can
                                            order fresh, authentic Kalari cheese directly from our website and we ensure
                                            timely delivery to your location while maintaining its quality and taste.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Do you have any recipes or serving suggestions for Kalari cheese?

                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes, on our website and café you will find creative recipes and serving
                                            suggestions for this versatile cheese in both traditional and modern dishes.
                                        </p>
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

<section class="latest_blog_sec py_8 pt-0">
    <div class="container">
        <div class="heading_latest_blog">
            <h2>Latest Blog</h2>
        </div>
        <div class="latest_blog_sec_un">
            <div class="item">
                <div class="main_under_latest">
                    <div class="latest_img">
                        <img src="{{ asset('public/asset/img/restaurant-interior.jpg')}}" alt="">
                    </div>
                    <div class="content_latest">
                        <h3>What determines the color of the coffee extract?</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, suscipit nam. Inventore
                            porro dicta sapiente blanditiis ipsa repellendus esse dolore sit optio, non fugit, animi
                            recusandae! Magni cupiditate esse cumque.</p>
                        <div class="btn_latest_blog">
                            <a href="#" class="btn_view_all">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_under_latest">
                    <div class="latest_img">
                        <img src="{{ asset('public/asset/img/restaurant-interior.jpg')}}" alt="">
                    </div>
                    <div class="content_latest">
                        <h3>What determines the color of the coffee extract?</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, suscipit nam. Inventore
                            porro dicta sapiente blanditiis ipsa repellendus esse dolore sit optio, non fugit, animi
                            recusandae! Magni cupiditate esse cumque.</p>
                        <div class="btn_latest_blog">
                            <a href="#" class="btn_view_all">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_under_latest">
                    <div class="latest_img">
                        <img src="{{ asset('public/asset/img/restaurant-interior.jpg')}}" alt="">
                    </div>
                    <div class="content_latest">
                        <h3>What determines the color of the coffee extract?</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, suscipit nam. Inventore
                            porro dicta sapiente blanditiis ipsa repellendus esse dolore sit optio, non fugit, animi
                            recusandae! Magni cupiditate esse cumque.</p>
                        <div class="btn_latest_blog">
                            <a href="#" class="btn_view_all">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main_under_latest">
                    <div class="latest_img">
                        <img src="{{ asset('public/asset/img/restaurant-interior.jpg')}}" alt="">
                    </div>
                    <div class="content_latest">
                        <h3>What determines the color of the coffee extract?</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, suscipit nam. Inventore
                            porro dicta sapiente blanditiis ipsa repellendus esse dolore sit optio, non fugit, animi
                            recusandae! Magni cupiditate esse cumque.</p>
                        <div class="btn_latest_blog">
                            <a href="#" class="btn_view_all">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
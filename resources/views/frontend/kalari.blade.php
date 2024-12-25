@extends('include.app')
@section('content')

<section class="about_banner" style="background-image: url(public/asset/img/banner_cheese.jpg);">
            <div class="container">
                   <div class="content_about">
                     <h1>Kalari Cheese – The Heart of Dogra Heritage</h1>
                   </div>
            </div>
        </section>

        <section class="about_us py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img_about_kalari">
                            <img src="{{ asset('public/asset/img/kalari_about_cheese.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about_content">
                            <h2>Making Cheese the Traditional Way: The Kalari Factory’s Legacy</h2>
                            <p>Here, at The Kalari Factory, we take pride in preserving the traditional art of cheese-making, which reflects the rich heritage of the Dogra culture. Kalari Cheese, often called the "Mozzarella of the Hills," is crafted through a traditional process passed down through generations in the Himalayan region.
                            </p>
                            <p>The journey begins with fresh cow's or goat's milk, carefully processed to create the semi-soft cheese ripened to perfection. This traditional technique gives Kalari its unique texture, crispy on the outside and soft and gooey on the inside when cooked, and an unmatched distinct tangy flavor.
                            </p>
                            <p>We source Kalari from local artisans and get an authentic product. All earnings go directly to the family to preserve their traditional heritage. In short, The Kalari Factory brings you this yummy cheese legacy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="ongoing_fees_main benefits_kalari_cheese py_8">
            <div class="container">
               <div class="heading_ongoing">
                   <h2>Unique Benefits of Kalari Cheese</h2>
               </div>
               <div class="row align-items-center">
                   <div class="col-lg-5 col-md-12 col-sm-12">
                       <div class="img_franchise">
                           <img src="{{ asset('public/asset/img/healthy_cheese_mealss.png')}}" alt="">
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="main_howit_works">
                                    <h3>Rich in Nutrients</h3>
                                    <p>Kalari is high in protein, calcium and healthy fats, perfect for strong bones and muscle repair.
                                    </p>
                                    <h3>Energy Booster</h3>
                               <p>It helps muscle repair and growth, making it a great addition to a balanced diet. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="main_howit_works">
                                    <h3>Distinctive Flavor</h3>
                                    <p>It offers a chewy texture and smoky, tangy flavor, making it a standout in any dish.
                                    </p>
                                    <h3>Unique Taste
                                    </h3>
                                    <p>Kalari cheese offers a bold, smoky, and tangy flavor that sets it apart from regular cheeses, making it an irresistible choice for cheese lovers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="main_howit_works">
                                    <h3>Cultural Experience
                                    </h3>
                                    <p>It reflects the rich Dogra heritage and connects you to the Himalayan region.</p>
                                    <h3>Memorable Eating Experience
                                    </h3>
                                    <p>Every bite immerses you in the rich Dogra heritage.
                                    </p>
                                </div>
                            </div>  
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="main_howit_works">
                                    <h3>Perfect for Every Occasion</h3>
                                    <p>Whether as a snack, a part of a main course, or a gourmet appetizer, Kalari cheese fits seamlessly into any menu.
                                    </p>
                                    <h3>A Taste of Tradition
                                    </h3>
                                    <p>Kalari cheese is a living tradition, offering a direct connection to the Himalayan region’s centuries-old cheese-making craft, preserving the rich cultural legacy with every bite.|
                                    </p>
                                </div>
                            </div>  
                    </div>              
                   </div>
               </div>
            </div>
        </section>

        <section class="special-menu py_8">
            <div class="container">
                <div class="heading-section text-center mb-68">
                    <h2>The Kalari Cheese</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                                        <button class="decrement" data-product-id="13">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-13">0</span>
                                        </div>
                                        <button class="increment" data-product-id="13">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-13">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
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
                                        <button class="decrement" data-product-id="12">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-12">0</span>
                                        </div>
                                        <button class="increment" data-product-id="12">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-8">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-12">
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
                                        <button class="decrement" data-product-id="11">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-11">0</span>
                                        </div>
                                        <button class="increment" data-product-id="11">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-11">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
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
                                        <button class="decrement" data-product-id="10">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-10">0</span>
                                        </div>
                                        <button class="increment" data-product-id="10">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-10">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="col-lg-12">
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
                                        <button class="decrement" data-product-id="9">-</button>
                                        <div class="price_add">
                                            <span class="quantity" id="quantity-9">0</span>
                                        </div>
                                        <button class="increment" data-product-id="9">+</button>
                                    </div>
                                </div>
                                <div class="img_add_to_cart">
                                    <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="cart"
                                        id="cart-icon">
                                    <span class="cart-badge" id="cart-badge-9">0</span>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>
                    </div>
          
                </div>
            </div>
            
        </section>
     
  <section class="banner_wg">
    <div class="wg-banner-coffee">
        <div class="bottom">
            <div class="heading_cheese_create">
                <h2>How is Kalari Cheese Made?</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <img class="banner-img wow fadeInUp animated" src="{{ asset('public/asset/img/box-1.jpg')}}" alt="" style="visibility: visible; animation-name: fadeInUp;">
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <div class="wg-banner-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <img class="item-bg" src="{{ asset('public/asset/img/item-4.png')}}" alt="">
                            <div class="icon"><img src="{{ asset('public/asset/img/every_thrusday.png')}}" alt=""></div>
                            <div class="title"><a href="#">Sourcing Quality Milk</a></div>
                            <p>Kalari cheese begins with fresh, high-quality milk, traditionally sourced from cows or goats in the Himalayan region. The milk is carefully selected for its rich flavor and natural goodness.
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
                            <div class="title"><a href="#">Curdling and Coagulation</a></div>
                            <p>The milk is heated with a natural coagulant, typically rennet or a local alternative to form curds. This step is crucial for giving Kalari its dense, firm texture.
                            </p>
                            <a class="button-default style-white" href="#">Read more <i class="icon-arrow-right2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <div class="wg-banner-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <img class="item-bg" src="{{ asset('public/asset/img/item-4.png')}}" alt="">
                            <div class="icon"><img src="{{ asset('public/asset/img/every_thrusday.png')}}" alt=""></div>
                            <div class="title"><a href="#">Pressing and Shaping</a></div>
                            <p>The curds are carefully pressed to remove excess whey and then shaped into round or cylindrical forms. This helps achieve the cheese’s distinctive texture, making it chewy and slightly crumbly.
                            </p>
                            <a class="button-default style-white" href="#">see all offers <i class="icon-arrow-right2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <img class="banner-img wow fadeInUp animated" src="{{ asset('public/asset/img/box-1.jpg')}}" alt="" style="visibility: visible; animation-name: fadeInUp;">
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <div class="wg-banner-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <img class="item-bg" src="{{ asset('public/asset/img/item-4.png')}}" alt="">
                            <div class="icon"><img src="{{ asset('public/asset/img/every_thrusday.png')}}" alt=""></div>
                            <div class="title"><a href="#">Natural Ripening</a></div>
                            <p>Kalari cheese is traditionally ripened by sun-drying or aging in a cool, dry place, which enhances its flavor. This natural aging process allows the cheese to develop its smoky, tangy notes, resulting in its unique taste.
                            </p>
                            <a class="button-default style-white" href="#">see all offers <i class="icon-arrow-right2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 mb-3">
                        <img class="banner-img wow fadeInUp animated" src="{{ asset('public/asset/img/box-1.jpg')}}" alt="" style="visibility: visible; animation-name: fadeInUp;">
                    </div>
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
                            <img src="{{ asset('public/asset/img/kalari_cheese_faq.jpg')}}" alt="">
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="right_according">
                            <div class="heading_accordian">
                                <h2>Frequently Asked Questions About Kalari Cheese </h2>
                                <p>Do you have any other questions or want to learn more about Kalari cheese? Feel free to contact us! Here are some common questions we often receive:
                                </p>
                            </div>

                            <div class="accordian_main">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What Makes Kalari Cheese Different from Other Cheeses?
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p>Kalari cheese is special, with a smoky, tangy taste and chewy texture. It's always prepared from high-quality milk obtained from cows or goats, and subsequently, it is naturally ripened, which gives it an incredible taste that cannot be discovered in any common cheese.
                                        </p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How Can I Apply Kalari Cheese to My Cooking?
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Kalari is very versatile and can be enjoyed in so many ways. It can be fried and enjoyed as a crispy snack, added to sandwiches, in salads, or in traditional Indian dishes like kulchas and paranthas.
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Is Kalari Cheese Vegetarian?
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, Kalari cheese is made from animal milk. Still, it does not contain meat or any other animal product, so it is a perfect option for vegetarians looking for a protein-rich supplement to their diet. </p>
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
        @endsection
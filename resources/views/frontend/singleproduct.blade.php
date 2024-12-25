@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(img/shop_bannner.png);">
            <div class="container">
                   <div class="content_about">
                     <h1>shop detail</h1>
                   </div>
            </div>
        </section>

        <section class="instantt_kalari_shop py_8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="under_instant_img">
                               <img src="img/coffee-post-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="under_main_hop">
                            <div class="shop_under_content">
                                <h3> instant Burger</h3>
                                <span>$20.00</span>
                                <div class="flx_star_shop">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p class="shop_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, doloremque voluptates, possimus obcaecati voluptatem quis accusamus minus repellat temporibus provident deleniti, illum officiis commodi exercitationem mollitia accusantium autem esse in.</p>
                                <h3>quantity</h3>
                                <div class="shop_addtocart">
                                    <a href="#" class="add_btn_cart"><div class="wrapper">

                                        <div class="product-qty">
                                            <button id="decrement">
                                            -
                                            </button>
                                            <div class="price_add">
                                            <span id="quantity">4</span>
                                            </div>
                                            <button id="increment">
                                            +
                                            </button>
                                        </div>
    
                            
                                    </div> <div class="img_add_to_cart">
                                        <img src="img/shopping-cart.png" alt="search">
                                    </div>
                                </a>
                                <div class="btn_shop">
                                    <a href="#" class="btn_view_all">Add to Cart <img src="img/shopping-cart.png" alt="search" class="search_shop"></a>
                                </div>

                                </div>
                                <div class="wishlist_shop">
                                   <a href="#"> <i class="fa fa-heart" aria-hidden="true"></i>Add to wishlist</a>
                                </div>
                                <div class="more-infor">
                                    <ul>
                                        <li>SKU:<span> 13750</span></li>
                                        <li>Category: <span>Fresh Coffee</span></li>
                                        <li>Tags:<a href="#"> Black</a>, <a href="#">Casual</a>, <a href="#">Classic</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="nav_tab_shoppage py_8 pt-0">
            <div class="container">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn_view_all active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn_view_all" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn_view_all" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Review</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="txt_description_shop">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                </p>
                        </div>
                  </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">          <div class="txt_description_shop">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                </p>
                        </div></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">          <div class="txt_description_shop">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur libero magni eius cum laborum consequuntur nisi dolor at aliquid quo alias culpa placeat voluptatem, facilis exercitationem, quibusdam necessitatibus mollitia.
                                </p>
                        </div></div>
                  </div>
            </div>
        </section>

        <section class="product_slider_shop py_8 pt-0">
            <div class="container">
                <div class="heading_product">
                    <h2>related products</h2>
                </div>
                <div class="owl-carousel owl-theme multiple-items">
                    <div class="item">
                        <div class="product_slider">
                            <div class="product_img_shop">
                                <img src="img/product_img_.png" alt="">
                                    <div class="product_shipping">
                                        <div class="icon_shop_ship">
                                            <div class="add">
                                                <a href="#">
                                                    <img src="img/shopping-cart.png" alt="search" class="search_shop">
                                                </a>
                                            </div>
                                            <div class="like">
                                                <a href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="content_product">
                                <div class="price">$20.00</div>
                                <div class="name"><a href="#">sugar black coffee</a></div>
                                <div class="rating">
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                       
                        </div>
                    </div>  
                    <div class="item">
                        <div class="product_slider">
                            <div class="product_img_shop">
                                <img src="img/product_img_.png" alt="">
                                    <div class="product_shipping">
                                        <div class="icon_shop_ship">
                                            <div class="add">
                                                <a href="#">
                                                    <img src="img/shopping-cart.png" alt="search" class="search_shop">
                                                </a>
                                            </div>
                                            <div class="like">
                                                <a href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="content_product">
                                <div class="price">$20.00</div>
                                <div class="name"><a href="#">sugar black coffee</a></div>
                                <div class="rating">
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                       
                        </div>
                    </div>  
                    <div class="item">
                        <div class="product_slider">
                            <div class="product_img_shop">
                                <img src="img/product_img_.png" alt="">
                                    <div class="product_shipping">
                                        <div class="icon_shop_ship">
                                            <div class="add">
                                                <a href="#">
                                                    <img src="img/shopping-cart.png" alt="search" class="search_shop">
                                                </a>
                                            </div>
                                            <div class="like">
                                                <a href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="content_product">
                                <div class="price">$20.00</div>
                                <div class="name"><a href="#">sugar black coffee</a></div>
                                <div class="rating">
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                       
                        </div>
                    </div>  
                    <div class="item">
                        <div class="product_slider">
                            <div class="product_img_shop">
                                <img src="img/product_img_.png" alt="">
                                    <div class="product_shipping">
                                        <div class="icon_shop_ship">
                                            <div class="add">
                                                <a href="#">
                                                    <img src="img/shopping-cart.png" alt="search" class="search_shop">
                                                </a>
                                            </div>
                                            <div class="like">
                                                <a href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="content_product">
                                <div class="price">$20.00</div>
                                <div class="name"><a href="#">sugar black coffee</a></div>
                                <div class="rating">
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                       
                        </div>
                    </div>  
                    <div class="item">
                        <div class="product_slider">
                            <div class="product_img_shop">
                                <img src="img/product_img_.png" alt="">
                                    <div class="product_shipping">
                                        <div class="icon_shop_ship">
                                            <div class="add">
                                                <a href="#">
                                                    <img src="img/shopping-cart.png" alt="search" class="search_shop">
                                                </a>
                                            </div>
                                            <div class="like">
                                                <a href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="content_product">
                                <div class="price">$20.00</div>
                                <div class="name"><a href="#">sugar black coffee</a></div>
                                <div class="rating">
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                       
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        @endsection
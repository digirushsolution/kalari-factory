@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(public/asset/img/banner_allproduct.png);">
    <div class="container">
        <div class="content_about">
            <h1>All Product</h1>
        </div>
    </div>
</section>

<div class="section section-padding py_8">
    <div class="container">
        <h2 class="home_adding"></h2>
        <!-- Product Section Wrapper Start -->
        <div class="product-section-wrapper">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-4 mb-3">
                                <div class="main_serach_product">
                                    <div class="img_search_product">
                                        <!-- Show the product image -->
                                        <img src="{{ asset('public/storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    </div>
                                    <div class="content_searches_main">
                                        <div class="heading_searches">
                                            <h4>{{ $product->name }}</h4>
                                            <div class="price_main_cheese">
                                                <div class="number_searches">
                                                    <p>${{ $product->price }}</p>
                                                </div>
                                                <div class="add_cart_allprod">
                                                    <a href="{{ route('cart') }}" tabindex="-1">
                                                        <img src="{{ asset('public/asset/img/shopping-cart.png') }}" alt="search" class="search_shopss">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-3">
                    <!-- Sidebar Start -->
                    <div class="sidebar">
                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget">
                            <div class="widget-search">
                                <form action="" method="GET">
                                    <input type="hidden" name="_token" value="PBDhEmBvCGeCreXM1pMAoSa3N1Ka9Qfwq3f2sNdP" autocomplete="off">
                                    <input type="text" name="search_name" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Filter By Categories</h4>

                            <div class="widget-checkbox widget-categories">
                                <ul class="checkbox-items">
                                    @foreach($categories as $category)
                                        <li>
                                            <input type="checkbox" name="category_name[]" id="checkbox{{ $category->id }}" value="{{ $category->id }}">
                                            <label for="checkbox{{ $category->id }}"> <span></span>{{ $category->name }}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Product Section Wrapper End -->
    </div>
</div>
@endsection

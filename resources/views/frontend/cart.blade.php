@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(public/asset/img/banner_cart.png);">
            <div class="container">
                   <div class="content_about">
                     <h1>Cart</h1>
                   </div>
            </div>
        </section>

        <div class="cart_main_sec py_8 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="shopping_cart_main">
                            <h3>Shopping Cart</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shopping_cart_main">
                            <h3>Checkout</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shopping_cart_main">
                            <h3>Order Completed</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="table_vart py_8 pt-0">
         <div class="container">
            <table>
                <tr>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td class="burger_kit_min">
                    <img src="{{ asset('public/asset/img/burger_cart_1.jpg')}}" alt="" class="burger_kit_main"></td>
                  <td>Burger</td>
                  <td>150</td>
                  <td>Rs 188.00</td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-times" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td class="burger_kit_min">
                      <img src="{{ asset('public/asset/img/burger_cart_1.jpg')}}" alt="" class="burger_kit_main"></td>
                    <td>Burger</td>
                    <td>150</td>
                    <td>Rs 188.00</td>
                    <td></td>
                    <td></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                  </tr>
                  <tr>
                    <td class="burger_kit_min">
                      <img src="{{ asset('public/asset/img/burger_cart_1.jpg')}}" alt="" class="burger_kit_main"></td>
                    <td>Burger</td>
                    <td>150</td>
                    <td>Rs 188.00</td>
                    <td></td>
                    <td></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                  </tr>
              </table>
              <div class="btn_update_cart">
                <a href="#" class="btn_view_all">Update Cart</a>
              </div>
         </div>
        </div>

   <div class="cart_main">
    <div class="container">
        <div class="cart_-total_sub">
            <div class="main_subtotal">
                <h3>Subtotal</h3>
                <h4>Rs.200</h4>
            </div>
            <div class="main_subtotal">
                <h3>Total</h3>
                <h4>Rs.200</h4>
            </div>
        </div>

        <div class="checkout">
            <a href="#" class="btn_view_all">
                Proceed to Checkout</a>
        </div>
    </div>
   </div>
   @endsection
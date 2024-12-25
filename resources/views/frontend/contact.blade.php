@extends('include.app')
@section('content')

<section class="about_banner" style="background-image: url(public/asset/img/contact_banner_2.png);">
            <div class="container">
                   <div class="content_about">
                     <h1 class="feff">Contact us</h1>
                   </div>
            </div>
        </section>

        <section class="address_mail py_8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="under_address">
                            <div class="img_address">
                            <img src="{{ asset('public/asset/img/facebook_kalari.png')}}" alt="">
                            </div>
                            <div class="content_address">
                                <h3>address</h3>
                                <p>W4GM+QJR, Udhampur Bus Stand Rd, Raghunathpura, Udhampur, Jammu and Kashmir 182101</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="under_address">
                            <div class="img_address">
                                <img src="{{ asset('public/asset/img/email_kalari.png')}}" alt="">
                            </div>
                            <div class="content_address">
                                <h3>email address</h3>
                            <a href="#">info@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="under_address">
                            <div class="img_address">
                                <img src="{{ asset('public/asset/img/phone_number_kalari.png')}}" alt="">
                            </div>
                            <div class="content_address">
                                <h3>Phone Number</h3>
                                <a href="#">123456789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_form py_8 pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <div class="map_contact_page">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6859.944289020427!2d76.708462658844!3d30.71918348473811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4028918ae34084cf%3A0x71348db7307cc64e!2sDigi%20Rush%20Solutions!5e0!3m2!1sen!2sus!4v1718789548219!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <div class="form_contact">
                                    <div class="heading_contact_form">
                                        <h2>Contact Form</h2>
                                    </div>
                                    <form action="" method="POST" class="main_form_kalari">
                                        <input type="hidden" name="_token" value="oUszCn3ZMoHzVai0vrmEwTGZJYEawbgWBB8hhNLx" autocomplete="off">   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="First name" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control" name="Last Name" placeholder="Last Name" aria-label="Last name" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control" name="phone" maxlength="10" placeholder="Mobile No." aria-label="Last name" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Address" placeholder="Name" aria-label="Address" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control" name="City"  placeholder="City" aria-label="City" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="State" placeholder="State" aria-label="State" required="">
                                            </div>
                                        </div>
                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select class="form-select" name="assistance_type" aria-label="Default select example" required="">
                                                    <option selected="" value="">Services</option>
                                                    <option value="1">Chesse </option>
                                                    <option value="2">Chesse</option>
                                                    <option value="3">Chesse</option>
                                        
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control" name="zipcode" maxlength="10" placeholder="Zip Code" aria-label="Last name" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <textarea name="" id="" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="btn_form_submit">
                                            <a href="#" class="btn_view_all">Submit</a>
                                        </div>
                                    </form>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
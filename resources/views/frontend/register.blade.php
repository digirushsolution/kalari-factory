
@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(img/banner_register.jpg);">
            <div class="container">
                   <div class="content_about">
                     <h1>Register Now</h1>
                   </div>
            </div>
        </section>

        <div class="login_form py_8">
            <div class="form_contact">
                <div class="heading_contact_form">
                    <h2>Register Form</h2>
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
                            <input type="tel" class="form-control" name="City" placeholder="City" aria-label="City" required="">
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
        @endsection
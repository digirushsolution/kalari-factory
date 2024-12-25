@extends('include.app')
@section('content')

<section class="about_banner" style="background-image: url(public/asset/img/banner_login.png);">
            <div class="container">
                   <div class="content_about">
                     <h1>Login Now</h1>
                   </div>
            </div>
        </section>

        <div class="login_form py_8">
            <div class="form_contact">
                <div class="heading_contact_form">
                    <h2>Login Form</h2>
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
                            <input type="text" class="form-control" name="Email" placeholder="Email" aria-label="Email" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" name="password" placeholder="password" aria-label="password" required="">
                        </div>
                    </div>
        
                    <div class="btn_form_submit">
                        <a href="#" class="btn_view_all">Submit</a>
                    </div>

                    <div class="btn_register_now">
                        <a href="{{route('register')}}">Register Now</a>
                    </div>
                </form>
        </div>
        </div>
        @endsection
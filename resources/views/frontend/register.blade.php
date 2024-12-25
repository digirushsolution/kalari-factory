
@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(public/asset/img/banner_register.jpg);">
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
                <form action="{{ route('user.store') }}" method="POST" class="main_form_kalari">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="email" required>
        </div>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" placeholder="password" required>
        </div>
       
        <div class="col-md-6">
            <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Mobile No." required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="city" placeholder="City" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="state" placeholder="State" required>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <textarea name="message" placeholder="Message" required></textarea>
        </div>
    </div>
    <div class="btn_form_submit">
        <button type="submit" class="btn_view_all">Submit</button>
    </div>
</form>

        </div>
        </div>
        @endsection
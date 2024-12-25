<footer class="py_8 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                   <div class="footer_lgo">
                    <a href="{{route('home')}}"><img src="{{ asset('public/asset/img/header_logo_kalari.png')}}" alt="">
                    </a>
                   </div>
                        <p>
                            At Kalari Factory, we unite people through culture, creativity, and exceptional experiences. Stay connected and discover more with us today!
                            </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <ul class="p-0">
                            <li class="footerline position-relative mb-4">Contact-Us</li>
                            <li><a href="#" class="d-flex flex-column mb-1"> <span> Location :</span>3444 lorem lorem</a>
                            </li>
                            <li><a href="#" class="d-flex flex-column"> <span> BOOK A TABLE
                                        :</span>testing@gmail.com <br>12345678</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <ul class="p-0">
                            <li class="footerline position-relative mb-4">Hour open</li>
                            <li><a href="#" class="mb-2"> <span> Monday - Friday :</span> 9:00- 22:00</a></li>
                            <li><a href="#" class="mb-2"> <span> Saturday :</span> 10:00- 23:00</a></li>
                            <li><a href="#" class="mb-2"> <span> Sunday :</span> 5:00- 23:00</a></li>
                            <li><a href="#" class="mb-2"> <span> Holidays :</span> Closed</a></li>
                            <li><a href="#" class="mb-2"> <span> Happy Hours :</span> 18:00 - 20:00</a></li>
    
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <ul class="p-0">
                            <li class="footerline position-relative mb-4">How to find us ?</li>
                            <li><a href="#" class="mb-3 d-inline-block"> <span> call us : </span>12346789</a></li>
                            <li><a href="#" class="d-flex flex-column"><span>information coffee house :
                                    </span>testing@gmail.com <br>12345677</a></li>
                        </ul>
                    </div>
                    <div class="copyrightline position-relative mt-5 mb-4"></div>
    
                    <div class="d-md-flex justify-content-between align-items-center">
                        <p>Copyright © 2023 themesflat. All Rights Reserved.</p>

                        
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex gap-3 align-items-center  conditions_main">
                                <a href="privacy_policy.html">privacy-policy</a>
                                <a href="refund_policy.html">Refund_policy</a>
                                <a href="terms_condition.html">Terms & Conditions</a>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center gap-4">
                            <p class="mb-0">Follow-us :</p>
                            <div class="d-flex gap-3 align-items-center">
                                <a href="#"><img src="{{ asset('public/asset/img/facebook.png')}}" alt="facebook"></a>
                                <a href="#"><img src="{{ asset('public/asset/img/instagram.png')}}" alt="insta"></a>
                                <a href="#"><img src="{{ asset('public/asset/img/twitter.png')}}" alt="twitter"></a>
                                <a href="#"><img src="{{ asset('public/asset/img/youtube.png')}}" alt="youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form_contact">
                <div class="heading_contact_form">
                    <h2>Contact Form</h2>
                </div>
                <form action="{{ route('franchise.contact.store') }}" method="POST" class="main_form_kalari">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
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
        <div class="col-md-6">
            <select class="form-select" name="assistance_type" required>
                <option value="" disabled selected>Services</option>
                <option value="1">Service 1</option>
                <option value="2">Service 2</option>
                <option value="3">Service 3</option>
            </select>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="zipcode" maxlength="10" placeholder="Zip Code" required>
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

      </div>
    </div>
  </div>
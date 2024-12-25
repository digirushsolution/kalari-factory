
@extends('include.app')
@section('content')
<section class="about_banner" style="background-image: url(public/asset/img/aboutt_banner11.png);">
            <div class="container">
                   <div class="content_about">
                     <h1>About us</h1>
                   </div>
            </div>
        </section>

        <section class="about_us py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img_about_kalari">
                            <img src="{{ asset('public/asset/img/about_kalari_img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about_content">
                            <h2>About Us</h2>
                            <p>The Kalari Factory is an entrepreneurial initiative working towards promoting the rich Dogra culture through traditional foods, ingredients, cuisines, and local arts. 
                            </p>
                            <p>Through this correspondence, we would also like to draw your attention towards our two Cafes and restaurants in Udhampur and Jammu districts. Among the fare offered at the cafes is Kalari, a traditionally ripened Himalayan cheese, indigenous to Udhampur. This traditional Dogra cheese is often made of cow's or goat's milk . Moreover, the cafes have also been actively promoting local art and artists demonstrating the Dogra heritage. we believe in employing local people as much as possible and therefore we have been directly and indirectly providing employment to many families from where we source our Kalaris and also to the artists who display their art at our cafes for anyone to buy it . We believe Kalaris should be sourced from the people who kept this art of making the tastiest cheese in the world alive. 
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="counter_about py_8">
            <div class="container">
                <div id="counter">
                   <div class="row">
                        <div class="col-md-3">
                            <div class="item">
                              <div class="counter_img">
                                <img src="{{ asset('public/asset/img/art_board_cunter1.png')}}" alt="">
                              </div>
                                <h1 class="count" data-number="400">4,00+</h1>
                                <h3 class="text">Women Empowered</h3>
                                </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter2.png')}}" alt="">
                                  </div>
                                <h1 class="count" data-number="150">150</h1>
                                <h3 class="text">Customer Satisfaction</h3>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter3.png')}}" alt="">
                                  </div>
                                <h1 class="count" data-number="200">200+</h1>
                                <h3 class="text">Years of Tradition</h3>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item">
                                <div class="counter_img">
                                    <img src="{{ asset('public/asset/img/art_board_cunter4.png')}}" alt="">
                                  </div>
                                <h1 class="count" data-number="20">100%</h1>
                                <h3 class="text">Natural Ingredients</h3>
                                </div>
                        </div>
                   </div>
                                        
                </div>
            </div>
        </section>
         <section class="vision_mission py_8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="heading_vision">
                            <div class="img_vision">
                                <img src="{{ asset('public/asset/img/vision_img.png')}}" alt="">
                            </div>
                            <h3>Our Vision</h3>
                            <p>Kalari Factory envisions a space where culture, creativity, and community are combined. We want to inspire connection through unique experiences, combining tradition and innovation in every aspect of our offering. We want to be a place where people gather, discover, and celebrate the art of living.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="heading_vision">
                            <div class="img_vision">
                                <img src="{{ asset('public/asset/img/mission_img.png')}}" alt="">
                            </div>
                            <h3>Our Mision</h3>
                            <p>Our mission at Kalari Factory is to create a space where culture, creativity, and community thrive. We strive to offer the best quality regarding food, inspiring events, and people gathering. Through passion, innovation, and authenticity, we can leave a mark on every guest who walks through our doors.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="heading_vision">
                            <div class="img_vision">
                                <img src="{{ asset('public/asset/img/value_immg.png')}}" alt="">
                            </div>
                            <h3>Value</h3>
                            <p>At Kalari Factory, we are committed to excellence, authenticity, and creativity in everything we do. We value community, fostering meaningful connections and experiences that resonate with our guests. Our focus on quality, respect for tradition, and innovation drives us to create a space where every moment is celebrated.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="follow-instagram style-1 py_8">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="grid-follow-instagram">
                            <div class="follow-item">
                                <img src="{{ asset('public/asset/img/follow-1.jpg')}}" alt="">
                                <div class="icon">
                                 <a href="#"> <img src="{{ asset('public/asset/img/hover_insta_main.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="follow-item">
                                <img src="{{ asset('public/asset/img/follow-2.jpg')}}" alt="">
                                <div class="icon">
                                 <a href="#"> <img src="{{ asset('public/asset/img/hover_insta_main.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="follow-item">
                                <img src="{{ asset('public/asset/img/follow-3.jpg')}}" alt="">
                                <div class="icon">
                                 <a href="#"> <img src="{{ asset('public/asset/img/hover_insta_main.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="follow-item">
                                <img src="{{ asset('public/asset/img/follow-4.jpg')}}" alt="">
                                <div class="icon">
                                 <a href="#"> <img src="{{ asset('public/asset/img/hover_insta_main.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="follow-item">
                                <img src="{{ asset('public/asset/img/follow-5.jpg')}}" alt="">
                                <div class="icon">
                                   <a href="#"> <img src="{{ asset('public/asset/img/hover_insta_main.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="title"><a href="#"><i class="icon-instagram"></i>follow us instagram</a></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="private_event py_8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="events_images">
                            <img src="{{ asset('public/asset/img/private_event_img.jpg')}}" alt="">
                            <!-- <img src="img/coffee_cup.png" alt="" class="position_set"> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="right_according">
                            <div class="heading_accordian">
                                <h2>Frequently asked questions </h2>
                            </div>

                            <div class="accordian_main">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What inspired the creation of Kalari Factory?
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p> Kalari Factory was inspired by the ancient martial art of Kalari, blending rich heritage with modern-day culture. We aim to create a space where creativity, community, and tradition unite, offering guests a unique experience.
                                             </p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What can I expect when visiting Kalari Factory?
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At Kalari Factory, you can expect a welcoming atmosphere, a fusion of delicious food at Kalari Factory Cafe, and a celebration of culture through art and community events. Every visit promises something new and inspiring.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What makes Kalari Factory different from other venues?
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Kalari Factory is more than just a café or event space. It's a place where culture, creativity, and innovation meet. We focus on providing memorable experiences, high-quality food, artistic exhibitions, and opportunities for meaningful connections within the community.
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
        @endsection
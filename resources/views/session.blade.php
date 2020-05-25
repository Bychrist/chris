@extends('layouts.master')
@section('content')
<!-- Number Counter -->
<section class="counter-bg" style="">
    <div class="sectionP40 blue-bg gradient50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="responsive" data-aos="fade-right" data-aos-duration="1000" style="padding-top:150px">
                            <div class="heading-text">
                                <span class="gold-gradient-color">Business Consultancy</span>
                            </div>
                            <p class="light2 oL" style="font-size: 16px; color:white">  Chris and his team help businesses strip down to the bare essentials and rebuild them to be lean, productive, effective and most importantly
                            profitable</p>
                           
                        </div>
                    </div>
                    <div id="counter" class="col-md-5 col-sm-12 col-xs-12 pull-right resPad0">
                        <div class="col-md-6 col-sm-3 col-xs-6 br bb">
                            <div class="numbers text-center" data-aos="zoom-in" data-aos-duration="1000" style="padding-top:50px">
                               
                                <img src="{{asset('assets/images/about.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6 bb">
                            <div class="numbers text-center" data-aos="zoom-in" data-aos-duration="1000" style="padding-top:100px">
                                 <img class="bounce" src="{{asset('assets/images/about2.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6 br">
                            <div class="numbers text-center" data-aos="zoom-in" data-aos-duration="1000">
                                {{-- <span class="numscroller rB gold-gradient-color" data-min='0000' data-max='4343' data-delay='1' data-increment='25'>00</span>
                                <p class="white oR">Followers</p> --}}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <div class="numbers text-center" data-aos="zoom-in" data-aos-duration="1000">
                                {{-- <span class="numscroller rB gold-gradient-color" data-min='0000' data-max='4546' data-delay='1' data-increment='25'>00</span>
                                <p class="white oR">Haters</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Number Counter -->




<!-- Our Best Features -->
<section id="features-section" class="sectionP60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="heading-text">
                            <span class="gold-gradient-color">Schedule A Session</span>
                        </div>
                        <p class="light oR" style="font-size: 16px;">
                            Chris and his team help businesses strip down to the bare essentials and
                        rebuild them to be lean, productive, effective and most importantly
                        profitable
                        </p>





                    </div>
                </div>
              
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12"> 
                   <form action="#">
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Full Name" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Email Address" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Mobile or Telephone" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Subject" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-puzzle-piece"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="input-box">
                                    <textarea placeholder="Type your message here..." name="" id="" cols="30" rows="5"></textarea>
                                    <span style="position: absolute"><i class="fa fa-comments"></i></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-gradient outline-button pull-right mtb20"><div style="background: #0C1222;transition: all 0.3s">Send <tag class="hidden-xs">Message</tag></div></button>
                    </form>
            
            </div>


        </div>
    </div>
</section>
<!-- Our Best Features -->






{{-- the client partials --}}
@include('partials.client')
{{-- end the client partials --}}













    
@endsection

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
                            <span class="gold-gradient-color">Chris Omoijiade</span>
                        </div>
                        <p class="light oR" style="font-size: 16px;">
Hi I’m Chris Omoijiade fondly called the CEO and I will like to welcome you to the Chris Omoijiade Company where the art of excellence is a lifestyle</p>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 p0 sectionP60">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="img" data-aos="fade-right" data-aos-duration="1000">
                            <img class="img-responsive centered rotate_im" src='{{asset('assets/images/mobile.png')}}'/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="features">
                           <p class="text-justify">
                                I am a Public Speaker, Business and Life mentor, innovative consultant, entrepreneur and Lawyer with a strong passion for personal development and business growth. I have also spearheaded the launch of a number of business ventures, presently sitting on board as Partner and Director in various sectors such as Law, Property and Investment, Foreign Exchange Dealing, Education, Marketing and Communications, Trading and the travel and Hospitality Industry.
                           
                           </p>
                           <p class="text-justify">
                                I love teaching, traveling, networking and discovering new things. I am also an author with publications and a soon to be launched book chronicling views and comments on life and business. I have an unexplainable addiction to books and seeking knowledge, a proud soccer lover, happily married with a son and living in the exciting city of Lagos.
                           </p>
                              <div class="acordian gradient-accordian" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="acordian-desc res-txt-center">
                                              <button class="btn btn-gradient outline-button  hidden-sm hidden-xs"  data-aos="zoom-in-up" data-aos-duration="800" style="margin-top:-16px;z-index:10    "><div  style="background:linear-gradient(to right, #e7c900,#FDA10E;transition: all 0.3s">Read More</div></button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="acordian-body res-txt-center" style="overflow-y:scroll;padding-right:20px;">
                                            <span class="white rL">
                                              <p class="white text-justify">
                                              Christopher Ehinomen Omoijiade studied at the University of Lagos International School, Proceeding to read Law at the University of Lagos after his O Levels, where he graduated with a LLB Hons Degree and thereafter went to the Nigerian Law School and was subsequently called to the Nigerian Bar and made a Solicitor and Barrister of the Supreme Court of Nigeria.
                                              </p>
                                              <p class="white text-justify">
                                                 He proceeded to the University of Hertfordshire UK For a Masters Degree in Telecommunications and Maritime Law and graduated with a commendation.

                                                    Chris is an Entrepreneur ,Public Speaker and business mentor/ consultant with a strong bias for Small and Medium Scale Businesses. He also has
                                                    spearheaded the launch of a number of business ventures, which he presently sits on board as Partner and Director in various sectors such as
                                                    Law, Property and Investment, Foreign Exchange Dealing, Education, Marketing and Communications, Trading and the travel and Hospitality
                                                    Industry.
                                              </p>

                                              <p class="white text-justify">
                                                    Chris possesses years of experience in Law and Business, with a history of working in management consulting and is skilled in Negotiation, Business
                                                    Development, Marketing Strategy and problem solving skills, client service expertise and has acted in various consultancy roles to both
                                                    private companies and government establishments.

                                                    His skills are therefore rooted in Entrepreneurship, Law, Business Consultancy, public speaking, leadership and Management, making them an exciting mix and an added advantage to anywhere such is in demand. He has appeared on a number of television, radio and newspaper mentions. He belongs to a number of organizations and associations and is actively involved in volunteerism. These includes the following- the Nigerian Bar Association, IBA, Chartered Institute of Arbitrators, he is also
                                                    a Volunteer of Junior Achievement Nigeria, the Lagos Food Bank Initiative and a proud member of Toastmasters International, the Center for Values in Leadership Lagos and the Junior Chamber International VI Lagos and a supporter of the International Business and Sustainable Development Commission

                                                    He loves teaching, traveling, networking and discovering new things, he is also an author with publications and a soon to be launched book chronicling views and comments on life and business, he has an unexplainable addiction to books and seeking knowledge, Chris is a proud soccer lover and is Happily married with a son and lives in the exciting city of Lagos.
                                              </p>
                                            </span>
                                        </div>
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
<!-- Our Best Features -->



<!-- What Can We Offer -->
<section id="offers-section" class="hiw-bg">
    <div class="sectionP60 grey-bg-o">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                        <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="heading-text">
                            <span class="gold-gradient-color">Some Of The Ways We <br> Can Work Together.</span>
                        </div>
                        <p class="light oR" style="font-size: 16px;">If you are this individual or business, let’s start a conversation about endless possibilities we can achieve together.</p>
                    </div>
                    </div>
                    <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 p0 sectionP40">
                      
                        <div class="col-md-12 col-sm-12 col-xs-12 sectionP20 pull-right">
                            <div class="acordian gradient-accordian" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="acordian-desc res-txt-center">
                                              <i class="fa fa-plus-square"></i><span>Speaking </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="acordian-body white" style="color:white;overflow-Y:scroll" >
                                             <ul class="ul-style aboutlist" style="color:#fff !important"  >
                                      
                                          
                                            Chris is constantly requested to speak at institutions, universities,
                                            companies, and schools, government bodies almost every week, delivering
                                            keynote addresses and speeches where he helps audiences:<br>
                                       
                                        
                                        <li  data-aos="fade-left" data-aos-duration="1000">
                                            <i class="fa fa-arrow-right"></i>
                                           Get Vulnerable
                                  
                                        </li>
                                        <li class="" data-aos="fade-left" data-aos-duration="1000">
                                          <i class="fa fa-arrow-right"></i>
                                           Lay down mental baggage and open up
                                     
                                        </li>

                                        <li class="" data-aos="fade-left" data-aos-duration="1000">
                                            <i class="fa fa-arrow-right"></i>
                                            Facilitate adoption
                                    
                                        </li>
                                        <li class="" data-aos="fade-left" data-aos-duration="1000">
                                         <i class="fa fa-arrow-right"></i>
                                            Show what management style isn’t working, and adopt one that works
                               
                                        </li>

                                        <li class="" data-aos="fade-left" data-aos-duration="1000">
                                            <i class="fa fa-arrow-right"></i>
                                            Leave with valuable tools, ideas and working strategies to make a
                                                difference.
                                      
                                        </li>

                                        <li class="" data-aos="fade-left" data-aos-duration="1000">
                                            <i class="fa fa-arrow-right"></i>
                                                Increase Belonging
                                   
                                        </li>
                                        <li class="" data-aos="fade-left" data-aos-duration="1000" >
                                        <i class="fa fa-arrow-right"></i>
                                                Create a mutual sense of self and identity to bond together.
                                         
                                        </li>
                                
                                  </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                             <div class="acordian gradient-accordian" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="acordian-desc res-txt-center">
                                              <i class="fa fa-recycle"></i><span class="rM">Workshop  & Training Facilitation (Online & In-Person)</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="acordian-body " style="color:white;overflow-Y:scroll">

                                          <ul class="ul-style aboutlist" style="color:#fff !important"  >
                                                           Chris helps teams dig into each other deeply, creating stronger bonds
                                                            and better business outcomes. They walk away able to: <br>

                                                       <li><i class="fa fa-arrow-right"></i>      Understand Emotional Intelligence</li>

                                                           <li><i class="fa fa-arrow-right"></i> The knowledge of EQ and it’s impact on individuals & Businesses</li>

                                                            <li><i class="fa fa-arrow-right"></i>Create Resonance</li>

                                                            <li><i class="fa fa-arrow-right"></i>Develop ideas and products that pull on heartstrings.</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Increase Performance</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Teams that feel safe with each other last longer and outperform
                                                            competitors.</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Build Trust</li>

                                                           <li><i class="fa fa-arrow-right"></i> Explore the barriers impeding trust and overcome them.</li>

                                                            <li><i class="fa fa-arrow-right"></i> Experience Growth</li>

                                                           <li><i class="fa fa-arrow-right"></i>  Retain clients longer, understanding their growth trajectory and meeting
                                                            them there.</li>
                                             </ul>
                                           </div>
                                    </div>
                                </div>
                            </div>

                              <div class="acordian gradient-accordian" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                        <div class="acordian-desc res-txt-center">
                                              <i class="fa fa-print"></i><span class="rM">Coaching</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="acordian-body " style="color:white;overflow-Y:scroll">

                                          <ul class="ul-style aboutlist" style="color:#fff !important"  >
                                                         Chris guides thought-leaders, change-makers and executives on how to
                                                        share more of themselves through their work. Working confidentially,
                                                        they: <br>

                                                       <li><i class="fa fa-arrow-right"></i>     Get Clear</li>

                                                           <li><i class="fa fa-arrow-right"></i> Get clear on their story and why they are the way they are</li>

                                                            <li><i class="fa fa-arrow-right"></i>Find Hope</li>

                                                            <li><i class="fa fa-arrow-right"></i> Gain awareness that they aren’t alone in challenges, and can overcome
such.</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Go Deep</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Go deep into the areas that are almost never ventured into before</li>

                                                          <li><i class="fa fa-arrow-right"></i>  Increase Drive</li>

                                                           <li><i class="fa fa-arrow-right"></i>Increase motivation to lead their teams to do better</li>

                                                            <li><i class="fa fa-arrow-right"></i> Experience Growth</li>

                                                           <li><i class="fa fa-arrow-right"></i>  Retain clients longer, understanding their growth trajectory and meeting
                                                            them there.</li>
                                             </ul>
                                           </div>
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
<!-- What Can We Offer -->






{{-- the client partials --}}
@include('partials.client')
{{-- end the client partials --}}













    
@endsection

@extends('layouts.app')

@section('content')


<!-- HEADER -->
<section id="home-section">
    <div style="width: 100%; height: 100%;" data-vide-bg="mp4: assets/video/suit.mp4, webm: assets/video/suit.webm, ogv: assets/video/suit.ogv" data-vide-options="loop: loop, muted: true, position: 0% 0%">
        <div class="gradient50 sectionP60 header-pad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-5 col-xs-12 header-text sectionP60">
                                <h1 class="rL white">TRANSFORM YOUR</h1>
                                <h1 class="rL white Color-gold">BUSINESS</h1>
                                <p class="rL blue-L">From fully customized multiple day training designs to single and half-day workshops, you can have Chris and the team speak at your next event.</p>
                                <a href="{{url('/about')}}"><button class="animated bounce btn btn-gradient">Learn More</button></a>
                            </div>
                            <div class="col-md-8 col-sm-6 hidden-xs pull-right">
                                <div class="w3-content w3-section centered slidepad"  >
                                <img class="mySlides" src="{{asset('assets/images/slide01.jpg')}}" style="width:100%;height:400px">
                                <img class="mySlides" src="{{asset('assets/images/slide02.jpg')}}" style="width:100%;height:400px">
                                <img class="mySlides" src="{{asset('assets/images/slide04.jpg')}}" style="width:100%;height:400px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEADER -->

    <!-- About -->
<section id="about-section" class="grey-bg" style="padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="services-div margin-minus" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center br service-hover">
                        <div class="service" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="service-icon">
                                <i class="fa fa-puzzle-piece"></i>
                            </div>
                            <div class="service-desc">
                                <h4 class="blue oB">Our Mission</h4>
                                <p class="light oR">
                                Our mission is to consistently deliver world class services in our dissemination of strategic knowledge to individuals and business and ensuring we equally play our role as positive change agents for the greater good of society.
                                   &nbsp; <br/> <br/> <br/>
                                      &nbsp; <br/> <br/> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center br b0 service-hover">
                        <div class="service" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="service-icon">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="service-desc">
                                <h4 class="blue oB">Our Vision</h4>
                                <p class="light oR">
                                   A foremost globally recognised leadership, Management and Innovative Consultancy Firm, positively impacting lives and businesses

 
                                </p>
                                <p>
                                   &nbsp; <br/> <br/> <br/>    &nbsp; <br/> <br/> <br/>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center br b0 service-hover">
                        <div class="service" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="service-icon">
                                <i class="fa fa-hourglass-2"></i>
                            </div>
                            <div class="service-desc">
                                <h4 class="blue oB">Our Story</h4>
                                <p class="light oR">
                                    Our story began in 2010 with a long term vision for youth empowerment, leadership trainings, mentorship engagements and we kicked off in the same year with the execution of what was undisputedly one of the biggest strategic leadership conferences in Lagos, Nigeria with the internationally recognized management and leadership expert John Maxwell.
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                    <div id="wwa">
                        <div class="heading-text" data-aos="fade-up" data-aos-duration="1000">
                            <span class="gold-gradient-color">WHO WE ARE?</span>
                        </div>
                        <p class="light oR" data-aos="fade-up" data-aos-duration="1000">
                          The Chris Omoijiade Company formerly known as Attrium Consultants is a Leadership, Management, innovative consultancy boutique firm that is rededicated to effective operation, administration and implementation of educational programs and tools aimed at enhancing more productive techniques to individuals, corporate entities and the public sector.
                        </p>
                        <p>
                            We achieve this by developing in-house practical approaches and solutions to solving life and business problems, we also operate under licence from some of the world’s leading authorities in various fields of knowledge dissemination to ensure growth and profitability.
                        </p>

                        <a href="{{url('/about')}}">
                        <button class="btn btn-gradient outline-button mtb20" data-toggle="modal" data-target="#pop-about" data-aos="zoom-in-up" data-aos-duration="800"><div style="background: #f1f1f1;transition: all 0.3s"><span>Read More About Us</span></div>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About -->

<!-- Why Choose Us -->
<section id="why-us-section" class="sectionP60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="responsive rsb"  data-aos="fade-right" data-aos-duration="1000">
                        <div class="heading-text">
                            <span class="blue-gradient-color"
                            >Why choose Us?</span>
                        </div>
                        <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <br>
                        <p class="light oR">
                           They have to construct a content for this place
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="video-embed pull-right" data-aos="fade-left" data-aos-duration="1000">
                        <div class="thumb">
                             <span><i class="gold-gradient-color fa fa-youtube-play"></i></span>
                        </div>
                        <iframe width="533" height="300" src="https://www.youtube.com/embed/2LeOH9AGJQM?rel=0" frameborder="0" allowfullscreen></iframe>
                        <!--<iframe src="https://player.vimeo.com/video/202406936?title=0&amp;byline=0&amp;portrait=0&amp;color=FDA10E&amp;autoplay=0" width="100%" height="300" autoplay="0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></iframe>-->
                    </div>
                    <div class="quote-div gold-gradient-bg pull-right" data-aos="fade-up" data-aos-duration="1000">
                        <p class="white oR">They have to choose a video for this place. the issue with this sight is content and very good images to play with .Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us -->


@endsection
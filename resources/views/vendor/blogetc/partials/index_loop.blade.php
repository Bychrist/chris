 @section('css')

	<link rel="stylesheet" href="{{asset('chrisblog/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/font-awesome5.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/main.css')}}" class="color-switcher-link">

	<script src="{{asset('chrisblog/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    
 @endsection

<section class="counter-bg" style="">
    <div class="sectionP40 blue-bg gradient50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="responsive"  style="padding-top:150px">
                            <div class="heading-text">
                                <span class="gold-gradient-color">Get Inspired</span>
                            </div>
                            <p class="light2 oL" style="font-size: 16px; color:white">  Chris and his team help businesses strip down to the bare essentials and rebuild them to be lean, productive, effective and most importantly
                            profitable</p>
                           
                        </div>
                    </div>
                    <div id="counter" class="col-md-5 col-sm-12 col-xs-12 pull-right resPad0">
                        <div class="col-md-6 col-sm-3 col-xs-6 br bb">
                            <div class="numbers text-center" style="padding-top:50px">
                               
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






<section id="features-section" class="sectionP60" style="margin-bottom:10px;padding:100px 0px 0px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="heading-text">
                            <span class="gold-gradient-color">Chris Omoijiade Blog</span>
                        </div>
                        <p class="light oR" style="font-size: 16px;">
Hi I’m Chris Omoijiade fondly called the CEO and I will like to welcome you to the Chris Omoijiade Company where the art of excellence is a lifestyle</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>






<section class="ls s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="container">
					<div class="row c-gutter-60">
                        

						<main class="col-lg-7 col-xl-8"  >
							<article class="text-center text-sm-left vertical-item ls content-padding box-shadow post type-post status-publish format-standard has-post-thumbnail">
								<div class="item-media post-thumbnail" data-aos="zoom-in" data-aos-duration="1000">
									<a >
									<?=$post->image_tag('medium', true, ''); ?>
									</a>
									<span class="cat-links">
										<a href="" style="color:#fff" rel="category tag">
											{{$post->subtitle}}
										</a>
                                    
									</span>
								</div><!-- .post-thumbnail -->
								<div class="item-content" >
									<header class="entry-header">
										<h5 class="entry-title">
											<a href='{{$post->url()}}'>{{$post->title}}</a>
										</h5>
                                        <p style="margin-top:-20px;font-weight:bolder;color:#c0c0c0">
                                            <i style="color:#c0c0c0" class="fa fa-calendar-alt"></i>
                                          Published:  {{ $post->posted_at->diffForHumans() }}
                                        <p>
									</header>
									<!-- .entry-header -->
									<div class="entry-content">
										<p>
											Since the standard of play has significantly been raised in woman’s chest over the last few decades,
											there are now several women competing against the top players in the world.
										</p>
									</div><!-- .entry-content -->
									<footer class="entry-footer">
										<div class="entry-meta">
											<span class="byline">
												<span class="author vcard">
												
												<i style="color:#c0c0c0" class="fa fa-user fa-2x"></i>&nbsp; {{getPostUser($post->user_id)->name}}</a>
												</span>
											</span>
										</div>
										<a href="{{$post->url()}}" class="btn btn-darkgrey round">more</a>

                                           
									</footer>
								</div><!-- .item-content -->
							</article><!-- #post-## -->

				


							
						</main>

						<aside class="col-lg-5 col-xl-4">
							
								
                              @include("blogetc::sitewide.search_form")

							

							<div class="widget widget_categories">

								<h3 class="widget-title">Categories</h3>

							      @include('blogetc::sitewide.show_all_categories')
							</div>


							<div class="widget widget_gallery/square/01">
								<h3 class="widget-title">Recent Posts</h3>
                                @include('blogetc::sitewide.recent_posts')
							</div>

						

						</aside>


					</div>

				</div>
			</section>







@section('js')
    
	<script src="{{asset('chrisblog/js/compressed.js')}}"></script>
	<script src="{{asset('chrisblog/js/main.js')}}"></script>

    <script>
            $(document).ready(function () {
                $('#toTop').hide();
            });
    </script>
@endsection
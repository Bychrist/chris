{{-- @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())
    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
@endif --}}


<section class="counter-bg" style="">
    <div class="sectionP40 blue-bg gradient50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="responsive"  style="padding-top:150px">
                            <div class="heading-text">
                                <span class="gold-gradient-color">{{$post->title}}</span>
                            </div>
                            <p class="light2 oL" style="font-size: 16px; color:#ffffff !important">  
                         
                              {{ strip_tags(substr($post->post_body_output(), 0 , 200)) }}
                                [..]
                            </p>
                           
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


	<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60" >
				<div class="container">
					<div class="row">
						<main class="col-lg-7 col-xl-8">
							<article class="text-center text-sm-left vertical-item ls content-padding box-shadow single-post post type-post status-publish format-standard has-post-thumbnail">

								<!-- .post-thumbnail -->
								<div class="item-media post-thumbnail">
									<?=$post->image_tag('medium', false, 'd-block mx-auto'); ?>
								</div>


								<div class="item-content">
									<div class="entry-content text-justify">
                                            
                                             {!! $post->post_body_output() !!}
									</div>
									<footer class="entry-footer" style="padding:none;text-align:left">
										<div class="entry-meta" style="padding:none;text-align:left">
											<span class="byline">
												<span class="author vcard" style="padding-right:0px;">
													<i class="fa fa-user "></i>
													<a class="url fn n">
                                                        @includeWhen($post->author,"blogetc::partials.author",['post'=>$post])
                                                    </a>
												</span>
											</span>
                                       
											<span class="entry-date">
												<i class="fa fa-clock"></i>
												<a >
													{{$post->posted_at->diffForHumans()}}
												</a>
                                                
											</span>
											<span class="views-count" styl>
												<i class="fa fa-folder"></i>
												Category: @includeWhen($post->categories,"blogetc::partials.categories",['post'=>$post])
											</span>
										</div>
									</footer>
									<!-- .entry-content -->
								</div>
								<!-- .item-content -->
							</article>


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




{{-- {{$post->title}}
{{$post->subtitle}} --}}



    {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("blogetc::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}



{{-- 
Posted <strong>{{$post->posted_at->diffForHumans()}}</strong>

@includeWhen($post->author,"blogetc::partials.author",['post'=>$post])
@includeWhen($post->categories,"blogetc::partials.categories",['post'=>$post]) --}}

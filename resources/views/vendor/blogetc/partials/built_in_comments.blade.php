

	<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60 commentation">

				<div class="container">
					<div class="row">
                    
						<main class="col-lg-7 col-xl-8" style="align-text:justify;font-style:normal">
                         <h3> Comments</h3>
                            <article class="text-center text-sm-left vertical-item ls content-padding box-shadow single-post post type-post status-publish format-standard has-post-thumbnail">

@forelse($comments as $comment)



    {{-- <div class="card bg-light mb-3">
        <div class="card-header">
            {{$comment->author()}}

            @if(config("blogetc.comments.ask_for_author_website") && $comment->author_website)
                (<a href='{{$comment->author_website}}' target='_blank' rel='noopener'>website</a>)
            @endif

            <span class="float-right" title='{{$comment->created_at}}'><small>{{$comment->created_at->diffForHumans()}}</small></span>
        </div>
        <div class="card-body bg-white">
            <p class="card-text">{!! nl2br(e($comment->comment))!!}</p>
        </div>
    </div> --}}




                            
									
											<header class="comment-meta pull-left" style="padding:20px 0px 0px 20px;" >
												<div class="comment-author vcard">
													<img alt="" src="images/team/01.jpg">
													<h6 style="align-text:left !important">
														<strong  rel="nofollow" class="url">  {{ ucwords($comment->author())}}</strong>
                                                      
                                                        
													</h6>
												</div>
											</header>
                                            <div class="clearfix"></div>
											<div class="comment-content p-5" style="padding:0px 20px 0px 20px">
												<p class="text-justify">
                                                    {!! nl2br(e($comment->comment))!!}
                                                 </p>
											</div>
											<footer class="comment-footer ">
											
												<span class="comment-metadata">
													<i class="fa fa-clock"></i>
										
														<time datetime="2018-03-14T07:57:01+00:00">
															  <span  title='{{$comment->created_at}}'><small>{{$comment->created_at->diffForHumans()}}</small></span>
														</time>
                                                        <br/><br/><br/>
													
												</span>
											</footer>

                                            <hr style="background:#000">
								
                           

						




@empty
    <div class='alert alert-info'>No comments yet! Why don't you be the first?</div>
@endforelse
@if(count($comments)> config("blogetc.comments.max_num_of_comments_to_show",500) - 1)
    <p><em>Only the first {{config("blogetc.comments.max_num_of_comments_to_show",500)}} comments are
            shown.</em>
    </p>
@endif

              
                     </article>
                       

                    </main>
                    </div>
                </div>
    </section>




    

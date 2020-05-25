	<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60 commentation">

				<div class="container">
					<div class="row">
                    
						<main class="col-lg-7 col-xl-8" style="align-text:justify;font-style:normal">
                         <h3> Leave a comment</h3>
                            <article class="text-center text-sm-left vertical-item ls content-padding box-shadow single-post post type-post status-publish format-standard has-post-thumbnail" style="padding:50px;">
                                    <form method='post' action='{{route("blogetc.comments.add_new_comment", $post->slug)}}'>
                     @csrf


        			<p class="comment-form-author form-group has-placeholder">

                            <label  for="comment">Your Comment </label>
                            <textarea
                            class="form-control"
                            name='comment'
                            maxlength='500'
                            required
                            id="comment"
                            placeholder="Write your comment here"
                            rows="4">{{old("comment")}}</textarea>


                     </p>

 


                @if(config("blogetc.comments.save_user_id_if_logged_in", true) == false || !\Auth::check())

                   
        			<p class="comment-form-author form-group has-placeholder">
                            <label  for="author_name">Your Name </label>
                            <input
                                    type='text'
                                    class="form-control"
                                    name='author_name'
                                    id="author_name"
                                    placeholder="Your name"
                                    required
                                    value="{{old("author_name")}}">
                     
                    </p>
                    @if(config("blogetc.comments.ask_for_author_email"))
                        <p class="comment-form-author form-group has-placeholder">
                                <label  for="author_email">Your Email
                                    <small>(won't be displayed publicly)</small>
                                </label>
                                <input
                                        type='email'
                                        class="form-control"
                                        name='author_email'
                                        id="author_email"
                                        placeholder="Your Email"
                                        required
                                        value="{{old("author_email")}}">
                        </p>
                    @endif
                @endif


                @if(config("blogetc.comments.ask_for_author_website"))
                         <p class="comment-form-author form-group has-placeholder">
                            <label  for="author_website">Your Website
                                <small>(Will be displayed)</small>
                            </label>
                            <input
                                    type='url'
                                    style="border-radius:10px;border-color:#ccc !important;"
                                    class="form-control"
                                    name='author_website'
                                    id="author_website"
                                    placeholder="Your Website URL"
                                    value="{{old("author_website")}}"
                                   
                                    
                                    >
                    </p>
                @endif
         
        


        @if($captcha)
            {{--Captcha is enabled. Load the type class, and then include the view as defined in the captcha class --}}
            @include($captcha->view())
        @endif


         <p class="comment-form-author form-group has-placeholder">
            <input type='submit' class=" btn btn-success "
                   value='Add Comment' style="padding:10px 0px 10px 0px;">
        </p>

    </form>


                            </article>
                        </main>
                    </div>
                </div>
    <section>




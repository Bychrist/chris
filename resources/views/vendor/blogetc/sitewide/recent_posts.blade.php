{{-- <h5>Recent Posts</h5>
<ul class="nav">
    @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
        <li class="nav-item">
            <a class='nav-link' href='{{$post->url()}}'>{{$post->title}}</a>
        </li>
    @endforeach
</ul> --}}



	<ul class="list-unstyled">
       @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
        <li class="media">
            <a  class="media-image pull-left mr-5" href="{{$post->url()}}">
                 <img src="{{asset('blog_images/'. getThumb($post->id)->image_thumbnail )}}" alt="">
                 &nbsp;&nbsp;
            </a>
            <div class="media-body">
                <h4>
                    <a href="{{$post->url()}}">{{$post->title}}</a>
                </h4>
                <p class="item-meta">
                    <i class="fa fa-clock"></i>
                    <a href="{{$post->url()}}"><i class> {{$post->posted_at->format('d/m/Y')}} </a>
                </p>

            </div>
        </li>


    
    @endforeach
    </ul>
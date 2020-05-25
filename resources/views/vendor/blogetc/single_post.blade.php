@extends("layouts.master",['title'=>$post->gen_seo_title()])
 @section('css')

	<link rel="stylesheet" href="{{asset('chrisblog/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/font-awesome5.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/main.css')}}" class="color-switcher-link">

	<script src="{{asset('chrisblog/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    
 @endsection
@section("content")


    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}



            @include("blogetc::partials.show_errors")
            @include("blogetc::partials.full_post_details")


            @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
           
                   
                    @include("blogetc::partials.show_comments")
              
            @else
                {{--Comments are disabled--}}
            @endif

@endsection

@section('js')
    
	<script src="{{asset('chrisblog/js/compressed.js')}}"></script>
	<script src="{{asset('chrisblog/js/main.js')}}"></script>

    <script>
            $(document).ready(function () {
                $('#toTop').hide();
            });
    </script>
@endsection




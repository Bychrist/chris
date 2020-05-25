@extends("layouts.master",['title'=>$title])
 @section('css')

	<link rel="stylesheet" href="{{asset('chrisblog/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/font-awesome5.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('chrisblog/css/main.css')}}" class="color-switcher-link">

	<script src="{{asset('chrisblog/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    
 @endsection
@section("content")
<!-- Number Counter -->
<section class="counter-bg" style="">
    <div class="sectionP40 blue-bg gradient50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12" style="height:50px;">
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

    <div class='row' style="margin-bottom:100px;margin-top:200px;">
        <div class="col-md-4 col-sm-4">
        
        </div>
        <div class='col-sm-4 mx-auto'>
            <h2>Search Results for {{$query}}</h2>

            @forelse($search_results as $result)

                <?php $post = $result->indexable; ?>
                @if($post && is_a($post,\WebDevEtc\BlogEtc\Models\BlogEtcPost::class))
                    <h2>Search result #{{$loop->count}}</h2>
                    @include("blogetc::partials.index_loop")
                @else

                    <div class='alert alert-danger'>Unable to show this search result - unknown type</div>
                @endif
            @empty
                <div class='alert alert-danger'>Sorry, but there were no results!</div>
            @endforelse


            @include("blogetc::sitewide.search_form")

        </div>
    </div>


@endsection
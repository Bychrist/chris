{{-- <h5>Post Categories</h5>
<ul class="nav">
    @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(10)->get() as $category)
        <li class="nav-item">
            <a class='nav-link' href='{{$category->url()}}'>{{$category->category_name}}</a>
        </li>
    @endforeach
</ul>
 --}}

@foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(10)->get() as $category)
        
	<ul>								
        <li class="cat-item">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <a href="{{$category->url()}}">{{$category->category_name}}</a>
            ({{ getPostsBelongingToCategory($category->id)->count() }})
        </li>
									
	</ul>
 @endforeach
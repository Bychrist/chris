{{-- <div style='max-width:500px;margin:50px auto;' class='search-form-outer'>
    <form method='get' action='{{route("blogetc.search")}}' class='text-center'>
        <h4>Search for something in our blog:</h4>
        <input type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
        <input type='submit' value='Search' class='btn btn-primary m-2'>
    </form>
</div> --}}

{{-- 
<div class="p-40 ls ms"> --}}
    <div class="widget widget_search" style="background:#ccc;padding:20px;border-radius:5px;">
        <h3 class="widget-title">Search</h3>
         <form method='get' action='{{route("blogetc.search")}}' class='text-center'>
           
            <input type="search" id="search-form-widget3" class="search-field" placeholder="Search" value='{{\Request::get("s")}}' name="s">

          <input type='submit' value='Search' style="width:50%;margin-top:4px" class='btn btn-success ' >
          @if(Request()->is(url('blog/search') ))
             <a href='{{url('blog')}}'style="margin-top:2px;border-radius:30px;padding:2px 0px 2px 0px;" class='btn btn-primary'>Back to blog post</a>
          @endif
        </form>
    </div>
{{-- </div> --}}
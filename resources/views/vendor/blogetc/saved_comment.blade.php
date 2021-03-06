@extends("layouts.master",['title'=>"Saved comment"])
@section("content")

    <div class='text-center' style="margin-top:200px;margin-bottom:200px">
        <h3>Thanks! Your comment has been saved!</h3>

        @if(!config("blogetc.comments.auto_approve_comments",false) )
            <p>After an admin user approves the comment, it'll appear on the site!</p>
        @endif

        <a href='{{$blog_post->url()}}' class='btn btn-primary'>Back to blog post</a>
    </div>

@endsection
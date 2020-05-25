<?php
use App\User;
use WebDevEtc\BlogEtc\Models\BlogEtcPost;


function getPostUser($userId)
{
    $user = User::where('id',$userId)->first();
    return $user;
}


function getPostsBelongingToCategory($id)
{
    $posts = DB::table('blog_etc_post_categories')-> where('blog_etc_category_id',$id)->get();
    return $posts;
}

function getThumb($id)
{
    $post =  DB::table('blog_etc_posts')-> where('id',$id)->first();
    return $post;
}
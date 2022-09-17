<?php

use App\Models\Blog;
use App\Models\Pageview;
use App\Models\User;

function viewcount($id)
{
    $count = Pageview::where('page_id', $id)->where('type', 'b')->count();
    return $count;

}

function recentblogs()
{
    $blogs = Blog::orderBy('updated_at', 'desc')->take(5)->get();
    foreach ($blogs as $blog) {
        $blog->user = User::where('id', $blog->user)->first();
    }
    return $blogs;
}

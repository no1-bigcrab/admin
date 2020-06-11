<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    //
    function getAllPost()
    {
        $post = Post::whereDate('created_at', '=', '2020-05-30')->get();
        //var_dump($post);
        return view('blog', compact('post'));
    }
}

<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    function getAllPost()
    {
        $post = Post::orderBy('created_at', 'DESC')->paginate(6);
        return view('layout.blog', compact('post'));
    }
}

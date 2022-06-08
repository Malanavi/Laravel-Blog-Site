<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        return view('blog', compact('posts'));
    }
}

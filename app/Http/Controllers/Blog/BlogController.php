<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $categories = Category::all();
        return view('blog', compact('posts', 'categories'));
    }
}

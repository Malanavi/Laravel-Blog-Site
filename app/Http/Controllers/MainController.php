<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Service;
use DB;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all()->random(2);
        return view('index', compact('posts'));
    }
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function services()
    {
        $services = Service::paginate(6);
        return view('services', compact('services'));
    }
    public function service(Service $service)
    {
        return view('service', compact('service'));
    }
}

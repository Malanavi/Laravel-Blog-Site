<?php

namespace App\Http\Controllers;

use App\Models\Service;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
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

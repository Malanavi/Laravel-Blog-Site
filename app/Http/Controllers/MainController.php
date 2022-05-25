<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('index');
    }
    public function about(): Factory|View|Application
    {
        return view('about');
    }
    public function contacts(): Factory|View|Application
    {
        return view('contacts');
    }
    public function services(): Factory|View|Application
    {
        return view('services');
    }
}

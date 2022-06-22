<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\ServiceService;

class BaseController extends Controller
{
    public $postService;
    public $serviceService;

    public function __construct(PostService $postService, ServiceService $serviceService)
    {
        $this->postService = $postService;
        $this->serviceService = $serviceService;
    }
}

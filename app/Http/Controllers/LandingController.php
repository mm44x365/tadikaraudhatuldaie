<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    private $perpage = 3;
    public function index()
    {
        return view('landing.index', [
            'posts' => Post::publish()->latest()->paginate($this->perpage)
        ]);
    }

    public function contactUs()
    {
        return view('landing.contact');
    }
}

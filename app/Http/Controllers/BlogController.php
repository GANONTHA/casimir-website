<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('partial.blogs.index');
    }
    // Show a single blog post
    public function show()
    {
        return view('partial.blogs.show');
    }
}

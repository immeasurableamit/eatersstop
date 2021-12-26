<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.blog');
    }

    public function blog_details()
    {
        return view('pages.blog-details');
    }
}

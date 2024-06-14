<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Blog;
use App\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banners = Banner::where('status','Published')->get();
        $testimonials = Testimonial::where('status','Published')->get();
        $blogs = Blog::where('status','Published')->latest()->get();

        return view('home',compact('banners','testimonials','blogs'));
    }
}

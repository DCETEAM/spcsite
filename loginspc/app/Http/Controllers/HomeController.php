<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AllBlog;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $about = About::first(); // Fetch about section data
        $categories = MainCategory::all();
        return view('welcome', compact('about', 'categories'));
    }
     
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AllBlog;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\WhyChooseUs;
use App\Models\WhyUsCertificate;


class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $categories = MainCategory::all();
        $data = WhyChooseUs::first();
        $certificates = WhyUsCertificate::all();
        return view('welcome', compact('about', 'categories', 'data', 'certificates'));
    }
     
}

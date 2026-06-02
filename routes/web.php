<?php

use App\Models\AllBlog;
use app\Models\WhyChooseUs;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\ProductSlug;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\BlogController;
use app\Http\Controllers\Admin\MaincategoryController;
use app\Http\Controllers\Admin\SubcategoryController;   
use app\Http\Controllers\Admin\AllBlogController;  
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SummernoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\ContactInfoController;
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/products', function () {
    return view('products.index');
});
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/facility', function () {
    return view('facilityview');
})->name('facility');

Route::get('/product04', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');


Route::view('/product05', 'product05')->name('product05');

Route::view('/product04', 'product04')->name('product04');

// product detail route using dynamic slugs

Route::get('/product/{slug}', function($slug) {
    $productSlug = ProductSlug::where('slug', $slug)->firstOrFail();

    return view($productSlug->view_name); // loads product1.blade.php
})->name('product.dynamic');

Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
     Route::get('/admin', [App\Http\Controllers\Admin\MaincategoryController::class, 'index'])
        ->name('maincategories.index');
      Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');
Route::post('/admin/about', [AboutController::class, 'store'])->name('admin.about.store'); 

Route::get('/admin/contact-info/edit', [App\Http\Controllers\Admin\ContactInfoController::class, 'edit'])->name('contact.edit');
        Route::post('/admin/contact-info/update', [App\Http\Controllers\Admin\ContactInfoController::class, 'update'])->name('contact.update');



 Route::prefix('admin')->name('admin.')->group(function () {

    // Maincategory routes

    Route::get('/maincategories/create', [App\Http\Controllers\Admin\MaincategoryController::class, 'create'])
    ->name('maincategories.create');
    Route::post('/maincategories', [App\Http\Controllers\Admin\MaincategoryController::class, 'store'])
        ->name('maincategories.store');
    Route::get('/maincategories', [App\Http\Controllers\Admin\MaincategoryController::class, 'index'])
        ->name('maincategories.index');
    Route::get('/maincategories/{id}/edit', [App\Http\Controllers\Admin\MaincategoryController::class, 'edit'])
        ->name('maincategories.edit');  
    Route::put('/maincategories/{id}', [App\Http\Controllers\Admin\MaincategoryController::class, 'update'])
        ->name('maincategories.update');
    Route::delete('/maincategories/{id}', [App\Http\Controllers\Admin\MaincategoryController::class, 'destroy'])
        ->name('maincategories.destroy');


    //subcategory route 


    Route::get('/subcategories/create', [App\Http\Controllers\Admin\SubcategoryController::class, 'create'])
        ->name('subcategories.create');
    Route::post('/subcategories', [App\Http\Controllers\Admin\SubcategoryController::class, 'store'])
        ->name('subcategories.store');
    Route::get('/subcategories', [App\Http\Controllers\Admin\SubcategoryController::class, 'index'])
        ->name('subcategories.index');
    Route::get('/subcategories/{id}/edit', [App\Http\Controllers\Admin\SubcategoryController::class, 'edit'])
        ->name('subcategories.edit');  
    Route::put('/subcategories/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'update'])
        ->name('subcategories.update');
    Route::delete('/subcategories/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'destroy'])
        ->name('subcategories.destroy');

    // Allblog routes
    // List blogs
    Route::get('allblogs', [App\Http\Controllers\Admin\AllblogController::class, 'index'])
        ->name('allblogs.index');

    // Create form
    Route::get('allblogs/create', [App\Http\Controllers\Admin\AllblogController::class, 'create'])
        ->name('allblogs.create');

    // Store
    Route::post('allblogs/store', [App\Http\Controllers\Admin\AllblogController::class, 'store'])
        ->name('allblogs.store');

    // Edit form
    Route::get('allblogs/edit/{id}', [App\Http\Controllers\Admin\AllblogController::class, 'edit'])
        ->name('allblogs.edit');

    Route::put('/allblogs/update/{id}', [App\Http\Controllers\Admin\AllblogController::class, 'update'])
     ->name('allblogs.update');


    // Delete
    Route::get('allblogs/delete/{id}', [App\Http\Controllers\Admin\AllblogController::class, 'destroy'])
        ->name('allblogs.destroy');


// Facility routes
    // Facilities Route (THIS FIXES YOUR ERROR)
    Route::get('/facilities', [App\Http\Controllers\Admin\FacilityController::class, 'index'])
        ->name('facilities.index');
    Route::get('/create', [App\Http\Controllers\Admin\FacilityController::class, 'create'])->name('facilities.create');
    Route::post('/store', [App\Http\Controllers\Admin\FacilityController::class, 'store'])->name('facilities.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\FacilityController::class, 'edit'])->name('facilities.edit');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\FacilityController::class, 'update'])->name('facilities.update');
    Route::delete('/{id}', [App\Http\Controllers\Admin\FacilityController::class, 'destroy'])->name('facilities.delete');

 
    // Show all products
    Route::get('/products/index', [App\Http\Controllers\Admin\ProductsController::class, 'index'])
        ->name('products.index');
    Route::get('/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])
        ->name('products.create');

    // Store new product
    Route::post('/products', [App\Http\Controllers\Admin\ProductsController::class, 'store'])
        ->name('products.store');

    // Edit product
    Route::get('/products/{id}/edit', [App\Http\Controllers\Admin\ProductsController::class, 'edit'])
        ->name('products.edit');

    // Update product
    Route::put('/products/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'update'])
        ->name('products.update');

    // Delete product
    Route::delete('/products/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'destroy'])
        ->name('products.destroy');

 // Why Us main page
    Route::get('why-us', [WhyChooseUsController::class, 'index'])->name('whyus');
    Route::post('why-us/update', [WhyChooseUsController::class, 'update'])->name('whyus.update');

 });
});
  
// routes/web.php
Route::prefix('admin')->name('admin.')->group(function () {

// Fetch products by category (AJAX)
     Route::get('/products/category/{id}', [ProductController::class, 'getProductsByCategory'])->name('products.byCategory');
    // Show create form
   

   Route::resource('products', ProductsController::class);
    // Route::get('get-subcategories/{maincategory_id}', [App\Http\Controllers\Admin\ProductsController::class, 'getSubcategories'])
        // ->name('getSubcategories');




     
// AJAX route for next position


    // future: Route::resource('blogs', BlogController::class);
    // future: Route::resource('abouts', AboutController::class);
   Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
   Route::get('abouts/create', [AboutController::class, 'create'])->name('abouts.create');
   Route::post('abouts', [AboutController::class, 'store'])->name('abouts.store');
   Route::get('abouts/{about}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
   Route::put('abouts/{about}', [AboutController::class, 'update'])->name('abouts.update');
   Route::delete('abouts/{about}', [AboutController::class, 'destroy'])->name('abouts.destroy');


   
});


Route::get('/products/{slug}', [ProductController::class, 'showPublic'])->name('show');

// Admin


// Client
Route::get('/about', function () {
    $about = \App\Models\About::first();
    return view('about', compact('about'));
})->name('about');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');




Route::get('/products/category/{idOrSlug}', [ProductController::class, 'showCategory'])->name('products.category');
Route::get('/category/{idOrSlug}', [ProductController::class, 'showCategory'])->name('products.category.slug');

Route::get('/products/subcategory/{subcategory_slug}', [ProductController::class, 'showSubcategory'])->name('products.subcategory');
Route::get('/subcategory/{subcategory_slug}', [ProductController::class, 'showSubcategory'])->name('products.subcategory.slug');


Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

// CLIENT BLOG LIST PAGE
Route::get('/blogs', function () {
    $blogs = App\Models\AllBlog::orderBy('publish_date', 'DESC')->paginate(6);
    $recent = App\Models\AllBlog::orderBy('publish_date', 'DESC')->limit(3)->get();
    return view('front.blogs', compact('blogs', 'recent'));
})->name('blogs.list');

// CLIENT SINGLE BLOG PAGE
Route::get('/blogs/{slug}', function ($slug) {
    $blog = App\Models\AllBlog::where('slug', $slug)->firstOrFail();
    $recent = App\Models\AllBlog::orderBy('publish_date', 'DESC')->limit(3)->get();
    return view('front.blog-details', compact('blog', 'recent'));
})->name('blogs.details');
Route::post('/summernote/upload', [App\Http\Controllers\SummernoteController::class, 'upload'])
    ->name('summernote.upload');
Route::post('/admin/blog/upload-image', [BlogController::class, 'uploadImage'])
     ->name('admin.blog.uploadImage');

// routes/web.php
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');



Route::delete('/admin/why-us/certificate/{id}', 
    [App\Http\Controllers\Admin\WhyChooseUsController::class, 'deleteCert']
)->name('admin.whyus.certificate.delete');
Route::get('/admin/subcategories/next-position/{maincategory_id}',
        [App\Http\Controllers\Admin\SubcategoryController::class, 'getNextPosition']
    )->name('admin.subcategories.next_position');
    Route::get('/admin/get-subcategories/{maincategory_id}', [App\Http\Controllers\Admin\ProductsController::class, 'getSubcategories']);
    Route::get('/admin/get-subcategories-multi', [App\Http\Controllers\Admin\ProductsController::class, 'getSubcategoriesMulti']);

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

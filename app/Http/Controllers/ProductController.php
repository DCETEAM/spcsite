<?php

// ...existing code...
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;

class ProductController extends Controller
{
public function index()
{
    $categories = MainCategory::all();

    // Step 1: First category
    $activeCategoryId = $categories->first()->maincategory_id ?? null;

    // Step 2: Sort subcategories by POSITION
    $subcategories = SubCategory::where('maincategory_id', $activeCategoryId)
                                ->orderBy('position', 'ASC')
                                ->get();

    // Step 3: FIRST subcategory automatically
    $activeSubcategory = $subcategories->first();

    // Step 4: Load products for FIRST subcategory
    $products = $activeSubcategory
        ? Product::whereJsonContains('sub_category_ids', (int)$activeSubcategory->subcategory_id)
                 ->orWhereJsonContains('sub_category_ids', (string)$activeSubcategory->subcategory_id)
                 ->get()
        : collect([]);

    return view('products.index', compact(
        'categories',
        'subcategories',
        'products',
        'activeCategoryId',
        'activeSubcategory'
    ));
}


    // 🟢 Show products by main category
    public function showCategorys($id)
{
    $categories = MainCategory::all();
    $activeCategoryId = $id;

    $subcategories = SubCategory::where('maincategory_id', $id)->get();

    $activeSubcategoryId = $subcategories->first()->subcategory_id ?? null;

    $products = $activeSubcategoryId
        ? Product::whereJsonContains('sub_category_ids', (int)$activeSubcategoryId)
            ->orWhereJsonContains('sub_category_ids', (string)$activeSubcategoryId)
            ->get()
        : collect([]);

    return view('products.index', compact(
        'categories',
        'subcategories',
        'products',
        'activeCategoryId',
        'activeSubcategoryId'
    ));
}


    // 🟢 Show products by subcategory
   public function showSubcategorsy($id)
{
    $sub = SubCategory::findOrFail($id);

    $categories = MainCategory::all();
    $activeCategoryId = $sub->maincategory_id;

    $subcategories = SubCategory::where('maincategory_id', $sub->maincategory_id)->get();

    // active is the clicked subcategory
    $activeSubcategoryId = $id;

    $products = Product::whereJsonContains('sub_category_ids', (int)$id)
        ->orWhereJsonContains('sub_category_ids', (string)$id)
        ->get();

    return view('products.index', compact(
        'categories',
        'subcategories',
        'products',
        'activeCategoryId',
        'activeSubcategoryId'
    ));
}


    // 🟣 Show single product by slug
    public function showPublic($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('show', compact('product'));
    }
 public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('show', compact('product'));
    }
   public function categoryWise($slug)
{
    $category = MainCategory::where('slug', $slug)->firstOrFail();
    
    $products = Product::where('maincategory_id', $category->maincategory_id)->get();

    return view('show', compact('category','products'));
}
 public function viewCategory($slug)
{
    $category = MainCategory::where('slug', $slug)->first();

    if (!$category) {
        abort(404, 'Category not found'); // prevents $category being bool false
    }

    $categories = MainCategory::all();  // <--- REQUIRED for top menu
    $subcategories = SubCategory::where('maincategory_id', $category->maincategory_id)->get();
    $products = Product::where('main_category_ids', $category->maincategory_id)->get();

    return view('products.index', compact('category','categories','subcategories','products'));
}
public function showCategory($idOrSlug)
{
    // Try to find by slug first, then by ID
    $category = MainCategory::where('slug', $idOrSlug)
                            ->orWhere('maincategory_id', $idOrSlug)
                            ->firstOrFail();

    $categories = MainCategory::all();

    // Get subcategories ordered by POSITION ASC (smallest = first)
    $subcategories = SubCategory::where('maincategory_id', $category->maincategory_id)
                                ->orderBy('position', 'ASC')
                                ->get();

    // FIRST SUBCATEGORY BASED ON display position
    $activeSubcategory = $subcategories->first();

    // Load products of FIRST subcategory automatically
    $products = $activeSubcategory
        ? Product::whereJsonContains('sub_category_ids', (int)$activeSubcategory->subcategory_id)
                 ->orWhereJsonContains('sub_category_ids', (string)$activeSubcategory->subcategory_id)
                 ->get()
        : collect([]);

    return view('products.index', compact('categories','subcategories','products','category','activeSubcategory'));
}




public function showSubcategory($subcategory_slug)
{
    $subcategory = SubCategory::where('slug',$subcategory_slug)->firstOrFail();
    $category = MainCategory::find($subcategory->maincategory_id);

    $categories = MainCategory::all();
    $subcategories = SubCategory::where('maincategory_id',$category->maincategory_id)
                                ->orderBy('position','ASC')->get();

    // ONLY THIS SUBCATEGORY PRODUCTS
    $products = Product::whereJsonContains('sub_category_ids',(int)$subcategory->subcategory_id)
                       ->orWhereJsonContains('sub_category_ids',(string)$subcategory->subcategory_id)
                       ->get();

    return view('products.index', compact('categories','subcategories','products','category','subcategory'));
}


}
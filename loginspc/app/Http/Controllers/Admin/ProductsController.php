<?php
// app/Http/Controllers/Admin/ProductsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $mainMap = MainCategory::pluck('maincategory_name', 'maincategory_id');
        $subMap  = SubCategory::pluck('subcategory_name', 'subcategory_id');
        return view('admin.products.index', compact('products', 'mainMap', 'subMap'));
    }

    public function create()
    {
        $maincategories = MainCategory::all();
        $subcategories  = SubCategory::all();
        return view('admin.products.create', compact('maincategories','subcategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'required|string|max:255|unique:products,slug',
            'subtitle'          => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'features'          => 'nullable|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'main_category_ids' => 'required|array',
            'sub_category_ids'  => 'required|array',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/products', 'public');
        }

        $product = new Product();
        $product->title             = $validated['title'];
        $product->subtitle          = $validated['subtitle'] ?? null;
        $product->slug              = $validated['slug'];
        $product->description       = $validated['description'] ?? null;
        $product->features          = $validated['features'] ?? null;
        $product->image             = $imagePath;
        $product->main_category_ids = $request->input('main_category_ids', []);
        $product->sub_category_ids  = $request->input('sub_category_ids', []);
        $product->save();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully!');
    }

    public function edit($id)
    {
        $product        = Product::findOrFail($id);
        $maincategories = MainCategory::all();

        // Limit subcategories to the product’s current mains (so the first paint is correct)
        $subcategories  = SubCategory::whereIn('maincategory_id', $product->main_category_ids ?? [])->get();

        // Provide explicit arrays for Blade preselection
        $selectedMainCategories = $product->main_category_ids ?? [];
        $selectedSubCategories  = $product->sub_category_ids ?? [];

        return view('admin.products.edit', compact(
            'product',
            'maincategories',
            'subcategories',
            'selectedMainCategories',
            'selectedSubCategories'
        ));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'required|string|max:255|unique:products,slug,' . $id,
            'subtitle'          => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'features'          => 'nullable|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'main_category_ids' => 'required|array|min:1',
            'sub_category_ids'  => 'nullable|array',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('uploads/products', 'public');
        }

        // Ensure array fields are always arrays
        $validated['main_category_ids'] = $request->input('main_category_ids', []);
        $validated['sub_category_ids']  = $request->input('sub_category_ids', []);

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', '✅ Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', '🗑 Product deleted successfully!');
    }

    public function getSubcategories($maincategory_id)
    {
        try {
            $subcategories = SubCategory::where('maincategory_id', $maincategory_id)->get();
            return response()->json($subcategories);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getSubcategoriesMulti(Request $request)
    {
        try {
            $ids = array_filter(explode(',', (string) $request->query('ids')));
            $subcategories = SubCategory::whereIn('maincategory_id', $ids)->get();
            return response()->json($subcategories);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
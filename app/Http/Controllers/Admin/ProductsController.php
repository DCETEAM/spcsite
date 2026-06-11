<?php
// app/Http/Controllers/Admin/ProductsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // Debug: show all request values
        logger()->info('Products Index Request', $request->all());

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:255'],
            'main_category' => ['nullable', 'integer', 'exists:maincategories,maincategory_id'],
            'title' => ['nullable', 'string', 'max:255'],
        ]);

        $search = $validated['search'] ?? null;
        $mainCategoryId = $validated['main_category'] ?? null;
        $title = $validated['title'] ?? null;

        $products = Product::query()
            ->search($search)
            ->filterByMainCategory($mainCategoryId)
            ->filterByTitle($title)
            ->latest()
            ->paginate(10)
            ->appends($validated);

        $mainCategories = MainCategory::all();
        $titles = Product::select('title')->distinct()->orderBy('title')->get();
        $mainMap = MainCategory::pluck('maincategory_name', 'maincategory_id');
        $subMap  = SubCategory::pluck('subcategory_name', 'subcategory_id');

        return view('admin.products.index', compact('products', 'mainMap', 'subMap', 'mainCategories', 'titles', 'search', 'mainCategoryId', 'title'));
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
            'slug'              => 'nullable|string|max:255|unique:products,slug',
            'subtitle'          => 'nullable|string|max:255',
            'code'              => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'features'          => 'nullable|string',
            'product_weight'    => 'nullable|string|max:255',
            'brimful_volume'    => 'nullable|string|max:255',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
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
        $product->code              = $validated['code'] ?? null;
        $product->description       = $validated['description'] ?? null;
        $product->features          = $validated['features'] ?? null;
        $product->product_weight    = $validated['product_weight'] ?? null;
        $product->brimful_volume    = $validated['brimful_volume'] ?? null;
        $product->image             = $imagePath;
        $product->main_category_ids = $request->input('main_category_ids', []);
        $product->sub_category_ids  = $request->input('sub_category_ids', []);
        
        // Auto-generate slug: title + plastic-bucket-used-in + main categories
        if (empty($validated['slug'])) {
            $mainCategoryIds = $request->input('main_category_ids', []);
            $mainCategoryNames = MainCategory::whereIn('maincategory_id', $mainCategoryIds)
                ->pluck('maincategory_name')
                ->toArray();
            
            $slugParts = array_merge([$validated['title']], ['plastic bucket used in'], $mainCategoryNames);
            $product->slug = Str::slug(implode(' ', $slugParts));
        }
        
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
            'slug'              => 'nullable|string|max:255|unique:products,slug,' . $id,
            'subtitle'          => 'nullable|string|max:255',
            'code'              => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'features'          => 'nullable|string',
            'product_weight'    => 'nullable|string|max:255',
            'brimful_volume'    => 'nullable|string|max:255',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'main_category_ids' => 'required|array|min:1',
            'sub_category_ids'  => 'nullable|array',
        ]);

        // Auto-generate slug: title + plastic-bucket-used-in + main categories
        if (empty($validated['slug'])) {
            $mainCategoryIds = $request->input('main_category_ids', []);
            $mainCategoryNames = MainCategory::whereIn('maincategory_id', $mainCategoryIds)
                ->pluck('maincategory_name')
                ->toArray();
            
            $slugParts = array_merge([$validated['title']], ['plastic bucket used in'], $mainCategoryNames);
            $validated['slug'] = Str::slug(implode(' ', $slugParts));
        }

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
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;

class MaincategoryController extends Controller
{
    public function index()
    {
        $maincategories = MainCategory::all();
        return view('admin.maincategories.index', compact('maincategories'));
    }

    public function create()
    {
        return view('admin.maincategories.create');
    }
public function store(Request $request)
{
    $request->validate([
        'maincategory_name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|unique:maincategories,slug',
        'maincategory_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $path = $request->hasFile('maincategory_image')
        ? $request->file('maincategory_image')->store('uploads/maincategories', 'public')
        : null;

    MainCategory::create([
        'maincategory_name' => $request->maincategory_name,
        'slug' => $request->slug ?: \Str::slug($request->maincategory_name),
        'maincategory_image' => $path,
    ]);

    return redirect()->route('admin.maincategories.index')
        ->with('success', 'Main category added successfully!');
}

    public function edit($id)
    {
        $maincategory = MainCategory::findOrFail($id);
        return view('admin.maincategories.edit', compact('maincategory'));
    }

  public function update(Request $request, $id)
{
    $maincategory = MainCategory::findOrFail($id);

    $request->validate([
        'maincategory_name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:maincategories,slug,' . $maincategory->maincategory_id . ',maincategory_id',
        'maincategory_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $path = $request->hasFile('maincategory_image')
            ? $request->file('maincategory_image')->store('uploads/maincategories', 'public')
            : $maincategory->maincategory_image;

    $maincategory->update([
        'maincategory_name' => $request->maincategory_name,
        'slug' => $request->slug,
        'maincategory_image' => $path,
    ]);

    return redirect()->route('admin.maincategories.index')
        ->with('success', 'Main category updated successfully!');
}

    public function destroy($id)
    {
        $maincategory = MainCategory::findOrFail($id);
        $maincategory->delete();

        
        return redirect()->route('admin.maincategories.index')->with('success', 'Main category deleted successfully!');
    }
    
}

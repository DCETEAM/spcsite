<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::orderBy('title')->get();
        return view('admin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facilities.create');
    }

    public function store(Request $request)
{
   $request->validate([
    'title' => 'required|string|max:255',
    'description' => 'required|string',
    'features' => 'nullable|string',
    'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // 2MB
]);


      $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/facilities', 'public');
        }

    Facility::create([
      
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
        'features' => $request->features,  // ⬅ updated
    ]);

    return redirect()
        ->route('admin.facilities.index')
        ->with('success', 'Facility added');
}


    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.facilities.edit', compact('facility'));
    }

public function update(Request $request, $id)
{
    $facility = Facility::findOrFail($id);

    $request->validate([
    'title' => 'required|string|max:255',
    'description' => 'required|string',
    'features' => 'nullable|string',
    'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // 2MB
]);


    // Keep old image by default
    $imagePath = $facility->image;

    // If new image uploaded
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads/facilities', 'public');
    }

    // Update record
    $facility->update([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
        'features' => $request->features,
    ]);

    return redirect()
        ->route('admin.facilities.index')
        ->with('success', 'Facility updated successfully');
}


    public function destroy($id)
    {
        Facility::findOrFail($id)->delete();
        return back()->with('success', 'Deleted');
    }
}
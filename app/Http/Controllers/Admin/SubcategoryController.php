<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
   public function index()
    {
        $subcategories = SubCategory::all();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    public function create()
    {
        $maincategories = MainCategory::all();
        return view('admin.subcategories.create', compact('maincategories'));
    }

    /** AJAX → Get next available position */
    public function getNextPosition($maincategory_id)
    {
        $count = SubCategory::where('maincategory_id', $maincategory_id)->count();
        return response()->json([
            'next_position' => $count + 1
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'maincategory_id' => 'required|exists:maincategories,maincategory_id',
            'subcategory_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:subcategorie,slug',
            'position' => 'required|integer|min:1',
            'subcategory_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $mainCategoryId = $request->maincategory_id;

        // Count existing for this main category
        $existing = SubCategory::where('maincategory_id', $mainCategoryId)->count();
        $maxPosition = $existing + 1;

        // Validate allowed range
        if ($request->position > $maxPosition) {
            return back()->withErrors([
                'position' => "Allowed positions for this category are 1 to $maxPosition"
            ])->withInput();
        }

        // Duplicate position check
        $duplicate = SubCategory::where('maincategory_id', $mainCategoryId)
            ->where('position', $request->position)
            ->exists();

        if ($duplicate) {
            return back()->withErrors([
                'position' => "Position {$request->position} already exists in this main category."
            ])->withInput();
        }

        // Upload image
        $path = null;
        if ($request->hasFile('subcategory_image')) {
            $path = $request->file('subcategory_image')->store('uploads/subcategorie', 'public');
        }

        // Create subcategory
        SubCategory::create([
            'maincategory_id' => $mainCategoryId,
            'subcategory_name' => $request->subcategory_name,
            'slug' => $request->slug ?: Str::slug($request->subcategory_name),
            'description' => $request->description,
            'position' => $request->position,
            'subcategory_image' => $path,
        ]);

        return redirect()->route('admin.subcategories.index')
            ->with('success', 'Subcategory added successfully!');
    }


    /** Edit Subcategory */
    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $maincategories = MainCategory::all();

        return view('admin.subcategories.edit', compact('subcategory', 'maincategories'));
    }

   public function update(Request $request, $id)
{
    $subcategory = SubCategory::findOrFail($id);

    $request->validate([
        'maincategory_id' => 'required|exists:maincategories,maincategory_id',
        'subcategory_name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:subcategorie,slug,' . $subcategory->subcategory_id . ',subcategory_id',
        'position' => 'required|integer|min:1',
        'subcategory_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
    ]);

    $oldMain = $subcategory->maincategory_id;
    $oldPos  = $subcategory->position;

    $newMain = $request->maincategory_id;
    $newPos  = $request->position;

    /* -------------------------
       HANDLE IMAGE
    -------------------------- */
    $image = $subcategory->subcategory_image;
    if ($request->hasFile('subcategory_image')) {
        $image = $request->file('subcategory_image')->store('uploads/subcategorie', 'public');
    }

    /* ---------------------------------
       CASE 1: MAIN CATEGORY CHANGED
    ---------------------------------- */
    if ($oldMain != $newMain) {

        // Reorder old category
        SubCategory::where('maincategory_id', $oldMain)
            ->where('subcategory_id', '!=', $subcategory->subcategory_id)
            ->orderBy('position')
            ->get()
            ->each(function ($item, $index) {
                $item->update(['position' => $index + 1]);
            });

        // New category → place at last
        $newPos = SubCategory::where('maincategory_id', $newMain)->count() + 1;
    }

    /* ---------------------------------
       CASE 2: SAME CATEGORY → SHIFT POSITIONS
    ---------------------------------- */
    if ($oldMain == $newMain) {

        // If position increased (e.g., 1 → 3)
        if ($newPos > $oldPos) {
            SubCategory::where('maincategory_id', $oldMain)
                ->whereBetween('position', [$oldPos + 1, $newPos])
                ->decrement('position');
        }

        // If position decreased (e.g., 3 → 1)
        if ($newPos < $oldPos) {
            SubCategory::where('maincategory_id', $oldMain)
                ->whereBetween('position', [$newPos, $oldPos - 1])
                ->increment('position');
        }
    }

    /* ---------------------------------
       FINAL UPDATE
    ---------------------------------- */
    $subcategory->update([
        'maincategory_id' => $newMain,
        'subcategory_name' => $request->subcategory_name,
        'slug' => $request->slug ?: Str::slug($request->subcategory_name),
        'description' => $request->description,
        'position' => $newPos,
        'subcategory_image' => $image,
    ]);

    return redirect()->route('admin.subcategories.index')
        ->with('success', 'Subcategory updated successfully!');
}


    /** Delete Subcategory */
  public function destroy($id)
{
    $subcategory = SubCategory::findOrFail($id);

    $mainCategoryId = $subcategory->maincategory_id;
    $deletedPosition = $subcategory->position;

    // Delete image if exists
    if ($subcategory->subcategory_image && file_exists(storage_path("app/public/{$subcategory->subcategory_image}"))) {
        unlink(storage_path("app/public/{$subcategory->subcategory_image}"));
    }

    // Delete subcategory
    $subcategory->delete();

    // AUTO-FIX POSITIONS
    SubCategory::where('maincategory_id', $mainCategoryId)
        ->where('position', '>', $deletedPosition)
        ->orderBy('position')
        ->get()
        ->each(function ($item) {
            $item->update([
                'position' => $item->position - 1
            ]);
        });

    return redirect()
        ->route('admin.subcategories.index')
        ->with('success', 'Subcategory deleted & positions updated!');
}

}

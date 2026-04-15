<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $about = About::first() ?? new About();
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            if ($about->image && File::exists(public_path($about->image))) {
                File::delete(public_path($about->image));
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about'), $filename);
            $about->image = 'uploads/about/' . $filename;
        }

        $about->save();

        return redirect()->back()->with('success', 'About section updated successfully!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AllblogController extends Controller
{
    public function index()
    {
        
        $blogs = AllBlog::orderBy('id', 'DESC')->paginate(10);
        return view('admin.allblog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.allblog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'image'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            // Store in storage/app/public/allblogs
            $imageName = $request->file('image')->store('blogsss', 'public');
        }

        AllBlog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'publisher' => $request->publisher,
            'publish_date' => $request->publish_date,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.allblogs.index')->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = AllBlog::findOrFail($id);
        return view('admin.allblog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = AllBlog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

        $imageName = $blog->image;

        if ($request->hasFile('image')) {

            // Delete old image from storage
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }

            // Store new image
            $imageName = $request->file('image')->store('blogsss', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'publisher' => $request->publisher,
            'publish_date' => $request->publish_date,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.allblogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = AllBlog::findOrFail($id);

        // Delete image from storage
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return back()->with('success', 'Blog deleted successfully');
    }
}

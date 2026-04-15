<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {   $categories = MainCategory::all();
        $blogs = Blogs::orderBy('id','DESC')->paginate(10);
        return view('admin.blog.index', compact('blogs','categories'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('blogs', $imageName, 'public');

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $imageName,
            'author' => $request->author ?? 'Admin',
            'publish_date' => $request->publish_date ?? now(),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success','Blog added successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('blogs', $imageName, 'public');
        } else {
            $imageName = $blog->image;
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $imageName,
            'author' => $request->author,
            'publish_date' => $request->publish_date,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success','Blog updated successfully');
    }

    public function delete($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->back()->with('success','Blog deleted successfully');
    }
}

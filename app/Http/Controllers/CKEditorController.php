<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        // Basic validation
        $request->validate([
            'upload' => 'required|image|max:5120' // max 5MB
        ]);

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();

            // Store into storage/app/public/ckeditor
            $path = $file->storeAs('ckeditor', $filename, 'public');

            // If you instead want public/uploads/ckeditor, use move() to public_path
            // $file->move(public_path('uploads/ckeditor'), $filename);
            // $url = asset('uploads/ckeditor/' . $filename);

            $url = Storage::disk('public')->url($path); // typically /storage/ckeditor/filename

            return response()->json([
                'url' => $url
            ], Response::HTTP_CREATED);
        }

        return response()->json(['error' => 'No upload found'], 400);
    }
}

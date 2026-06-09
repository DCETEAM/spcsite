<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use App\Models\WhyUsCertificate;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    // Load admin page
    public function index()
    {
        $data = WhyChooseUs::first();
        $certificates = WhyUsCertificate::all();

        return view('admin.whyus', compact('data', 'certificates'));
    }

    // Update or Create
    public function update(Request $request)
    {
        // Validation (recommended)
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'certificates.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // Get or create the row with id=1
        $section = WhyChooseUs::firstOrCreate(['id' => 1]);

        // Basic fields
        $section->title = $request->title;
        $section->description = $request->description;

        // Save stats using loop
        for ($i = 1; $i <= 4; $i++) {
            $section->{'stat'.$i.'_icon'}  = $request->input("stat{$i}_icon");
            $section->{'stat'.$i.'_value'} = $request->input("stat{$i}_value");
            $section->{'stat'.$i.'_title'} = $request->input("stat{$i}_title");
        }

        // Save DB
        $section->save();

        // Save certificates (unlimited)
        if ($request->hasFile('certificates')) {
            foreach ($request->file('certificates') as $file) {
                $path = $file->store('whyus/certs', 'public');

                WhyUsCertificate::create([
                    'image' => $path
                ]);
            }
        }

        return back()->with('success', 'Updated Successfully!');
    }
    public function deleteCert($id)
{
    $cert = WhyUsCertificate::findOrFail($id);

    // Delete file
    if ($cert->image && \Storage::disk('public')->exists($cert->image)) {
        \Storage::disk('public')->delete($cert->image);
    }

    // Delete DB row
    $cert->delete();

    return back()->with('success', 'Certificate deleted!');
}

}

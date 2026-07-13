<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ThemeSettingsController extends Controller
{
    public function edit()
    {
        $theme = SiteSetting::current();

        return view('admin.theme.edit', compact('theme'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'accent' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'accent_dark' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'hero_navy' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'hero_gold' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'hero_blue' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'footer_bg' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'font_body' => ['required', Rule::in(array_keys(SiteSetting::fontOptions()))],
            'font_heading' => ['required', Rule::in(array_keys(SiteSetting::fontOptions()))],
            'text_primary' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'text_muted' => ['required', 'string', 'max:50'],
            'bg_overlay' => ['required', 'integer', 'min:0', 'max:90'],
            'bg_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:6144'],
        ]);

        $theme = SiteSetting::current();

        if ($request->hasFile('bg_image')) {
            $destination = public_path('assets/img');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            if ($theme->bg_image && file_exists($destination . '/' . $theme->bg_image)) {
                @unlink($destination . '/' . $theme->bg_image);
            }

            $extension = $request->file('bg_image')->getClientOriginalExtension();
            $filename = 'site-bg-' . time() . '.' . $extension;
            $request->file('bg_image')->move($destination, $filename);
            $data['bg_image'] = $filename;
        } else {
            unset($data['bg_image']);
        }

        $theme->fill($data);
        $theme->save();

        return redirect()->back()->with('success', 'Site theme updated successfully.');
    }
}

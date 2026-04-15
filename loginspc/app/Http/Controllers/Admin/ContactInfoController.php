<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    
    // show edit form (single resource)
    public function edit()
    {
        $contact = ContactInfo::first(); // using first row
        if (!$contact) {
            $contact = ContactInfo::create([]);
        }
        return view('admin.contact.edit', compact('contact'));
    }

    // update
    public function update(Request $request)
    {
        $data = $request->validate([
            'about_lines' => 'nullable|string',
            'phone_numbers' => 'nullable|string', // comma or newline separated input
            'marketing_numbers' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
        ]);

        $contact = ContactInfo::first();
        if (!$contact) {
            $contact = new ContactInfo();
        }

        // normalize into arrays
        $normalize = function($str){
            if (is_null($str) || trim($str)==='') return [];
            // split on newline or comma and trim
            return array_values(array_filter(array_map('trim', preg_split('/[\r\n,]+/', $str))));
        };

        $contact->about_lines = $normalize($data['about_lines'] ?? null);
        $contact->phone_numbers = $normalize($data['phone_numbers'] ?? null);
        $contact->marketing_numbers = $normalize($data['marketing_numbers'] ?? null);
        $contact->email = $data['email'] ?? null;
        $contact->address = $data['address'] ?? null;

        $contact->save();

        return redirect()->back()->with('success','Contact info updated.');
    }
}

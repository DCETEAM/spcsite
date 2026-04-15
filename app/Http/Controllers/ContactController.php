<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message,
        ];

        // Send Email to Admin
        Mail::send('emails.contact', $data, function ($message) {
            $message->to('dcemadhu03@gmail.com')  // your email
                    ->subject('New Contact Form Submission');
        });

        // Send Confirmation to Client
        Mail::send('emails.client-confirm', $data, function ($message) use ($data) {
            $message->to($data['email'])
                    ->subject('Thank you for contacting SPC');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

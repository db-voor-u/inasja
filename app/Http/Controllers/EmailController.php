<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        try {
            $contactMail = new ContactMail($request->name, $request->email, $request->userMessage);
            Mail::to('receptieemail@mail.com')->send($contactMail);

            // Redirect to the Vue.js component (contact.vue) after successful email sending
            // Assuming 'contact' is the name of the route that renders the contact.vue component
            return to_route('contact');
        } catch (\Exception $e) {
            // In case of an error, you can still return a JSON response or handle it differently
            return response()->json(['success' => false, 'message' => 'Er is een fout opgetreden bij het verzenden van uw bericht.']);
        }
    }
}

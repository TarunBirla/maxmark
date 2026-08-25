<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\QuoteRequest;
use App\Mail\AdminContactMail;
use App\Mail\UserConfirmationMail;

class ContactController extends Controller
{
    /**
     * Show the Contact Page view.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        // 1. Save to Database
        $contact = Contact::create($validated);

        $adminEmail = config('mail.admin_email', env('ADMIN_EMAIL', 'maxmarkbuilders@gmail.com'));

        try {
            // 2. Send Email to Admin
            Mail::to($adminEmail)->send(new AdminContactMail($validated));

            // 3. Send Confirmation Email to User
            Mail::to($validated['email'])->send(new UserConfirmationMail($validated));

            return back()->with('success', 'Thank you for reaching out! Your message has been saved and sent successfully.');
        } catch (\Exception $e) {
            logger()->error('Contact form email failed: ' . $e->getMessage());

            return back()->with('success', 'Thank you for reaching out! Your message has been saved successfully.');
        }
    }

    /**
     * Handle the quote calculator form submission from Home Page.
     */
    public function submitQuote(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'phone'      => 'required|string|max:50',
            'email'      => 'required|email|max:255',
            'postcode'   => 'nullable|string|max:20',
            'service'    => 'nullable|string|max:255',
            'size'       => 'nullable|string|max:255',
            'time'       => 'nullable|string|max:255',
            'estimate'   => 'nullable|string|max:255',
        ]);

        // 1. Save to Database
        $quoteRequest = QuoteRequest::create($validated);

        // Prepare data for email
        $validated['name'] = $validated['first_name'];
        $validated['subject'] = 'Instant Quote Request: ' . ($validated['service'] ?? 'Home Quote');

        $adminEmail = config('mail.admin_email', env('ADMIN_EMAIL', 'maxmarkbuilders@gmail.com'));

        try {
            // 2. Send Email to Admin
            Mail::to($adminEmail)->send(new AdminContactMail($validated));

            // 3. Send Confirmation Email to User
            Mail::to($validated['email'])->send(new UserConfirmationMail($validated));
        } catch (\Exception $e) {
            logger()->error('Quote submission email failed: ' . $e->getMessage());
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success'  => true,
                'message'  => 'Quote request saved successfully.',
                'quote_id' => $quoteRequest->id
            ]);
        }

        return back()->with('success', 'Thank you! Your quote request has been received.');
    }
}

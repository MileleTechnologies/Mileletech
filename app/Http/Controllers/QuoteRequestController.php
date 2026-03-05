<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        QuoteRequest::create($validated);

        return back()->with('quote_success', 'Your quote request has been submitted successfully. Our team will contact you shortly.');
    }
}

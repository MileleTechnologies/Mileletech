<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'application_type' => ['required', 'string', 'max:50'],
            'position' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('career-applications', 'public');
        }

        CareerApplication::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'application_type' => $validated['application_type'],
            'position' => $validated['position'] ?? null,
            'message' => $validated['message'],
            'cv_path' => $cvPath,
        ]);

        return back()->with('career_success', 'Your application has been submitted successfully. Our team will contact you shortly.');
    }
}

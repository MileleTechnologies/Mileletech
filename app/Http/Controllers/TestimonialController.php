<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::query()->latest()->get();

        return view('reviews', compact('testimonials'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'message' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name' => $validated['name'],
            'service' => $validated['service'],
            'rating' => (int) $validated['rating'],
            'message' => $validated['message'],
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('reviews')->with('testimonial_success', 'Thank you! Your testimonial has been submitted successfully.');
    }
}

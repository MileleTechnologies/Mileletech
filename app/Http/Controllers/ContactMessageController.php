<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $category = $this->inferCategory($validated['subject'], $validated['message']);

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'category' => $category,
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return redirect('/contact')->with('success', 'Message received. We will get back to you shortly.');
    }

    private function inferCategory(string $subject, string $message): string
    {
        $text = mb_strtolower($subject . ' ' . $message);

        if (str_contains($text, 'support') || str_contains($text, 'issue') || str_contains($text, 'problem')) {
            return 'Support';
        }

        if (str_contains($text, 'quote') || str_contains($text, 'pricing') || str_contains($text, 'cost')) {
            return 'Quotation';
        }

        if (str_contains($text, 'partner') || str_contains($text, 'partnership')) {
            return 'Partnership';
        }

        if (str_contains($text, 'consult') || str_contains($text, 'consultation') || str_contains($text, 'meeting')) {
            return 'Consultation';
        }

        return 'General';
    }
}

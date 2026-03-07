<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InnovationProposal;

class InnovationProposalController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'innovation_area' => 'required|string|max:50',
            'project_idea' => 'required|string',
        ]);

        InnovationProposal::create($validatedData);

        return redirect()->back()->with('success', 'Innovation proposal submitted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Contact', [
            'contacts' => Contact::with('user:id,name')->latest()->get(),
            // 'contact' => Contact::all(),
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        return Inertia::render('Information', [
            'contacts' => Contact::with('user:id,name')->latest()->get(),
             
        ]);
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse       
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'numero' => 'required|int',
            'message' => 'required|string',
            ]);
            $request->user()->contacts()->create($validated);

            return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}

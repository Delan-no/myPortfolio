<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Galerie', [
            'galeries' => Galerie::with('user:id,name')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string|max:50',
        //     'images' => 'required|string',
        //     'description' => 'required|string|max:250',
        //     ]);
        //     $request->user()->galeries()->create($validated);

        dd($request);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'description' => 'nullable',
        ]);
        dd($request);

        $image = $request->file('image');
        $images = time() . '.' . $image->getClientOriginalExtension();

        // Stocker l'image dans le système de fichiers
        Storage::putFileAs('public/images', $image, $filename);

        // Enregistrer les informations dans la base de données
        Galerie::create([
            'images' => $images,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // return redirect()->back()->with('success', 'Image uploadée avec succès.');
        return redirect(route('galerie.index'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Galerie $galerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galerie $galerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galerie $galerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galerie $galerie)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mediatheque;
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Mediatheque::all();
        return View('backend.pages.mediatheque.list', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.pages.mediatheque.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mediatheque::create([
            'titre' => $request->titre,
            'image' => $request->image->store('images', 'public'),
        ]);

        return redirect()->route('gestion_mediatheques.index')->with('status', 'Media ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use App\Models\SousDomaine;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Activite::latest()->get();
        return View('backend.pages.activites.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listes = SousDomaine::latest()->get();
        return View('backend.pages.activites.form', compact('listes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Activite::create([
            'libelle' => $request->libelle,
            'image' => $request->image->store('images', 'public'),
            'sous_domaines_id' => $request->sous_domaines_id,
            'contenu' => $request->contenu,
        ]);
        return redirect()->route('gestion_activites.index')->with('status', 'Activites ajoutée avec succès !');
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

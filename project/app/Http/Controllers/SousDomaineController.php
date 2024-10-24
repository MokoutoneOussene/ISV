<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domaine;
use App\Models\SousDomaine;
use Illuminate\Http\Request;

class SousDomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = SousDomaine::all();
        return View('backend.pages.sousDomaine.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listes = Domaine::all();
        return View('backend.pages.sousDomaine.form', compact('listes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SousDomaine::create([
            'libelle' => $request->libelle,
            'image' => $request->image->store('images', 'public'),
            'domaines_id' => $request->domaines_id,
            'contenu' => $request->contenu,
        ]);
        return redirect()->route('gestion_Sous_domaines.index')->with('status', 'Sous domaines ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = SousDomaine::find($id);
        return view('backend.pages.sousDomaine.detail', compact('finds'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $finds = SousDomaine::find($id);
        $listes = Domaine::all();
        return view('backend.pages.sousDomaine.edit', compact('finds', 'listes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sousDomaine = SousDomaine::find($id);
        $sousDomaine->update([
            'libelle' => $request->libelle,
            'contenu' => $request->contenu,
        ]);
        return redirect()->route('gestion_Sous_domaines.index')->with('status', 'Sous domaines modifié avec succès!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function SousDomaine_image(Request $request, string $id)
    {
        $finds = SousDomaine::find($id);
        $finds->update([
            'image' => $request->image->store('images', 'public'),
        ]);

        return redirect()->back()->with('message', 'L\'image sous domaine a été changée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sousDomaines = SousDomaine::find($id);
        $sousDomaines->delete();

        return redirect()->route('gestion_Sous_domaines.index');
    }
}

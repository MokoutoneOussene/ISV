<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Domaine;
use App\Models\Rapport;
use App\Models\Activite;
use App\Models\Mediatheque;
use App\Models\Realisation;
use App\Models\SousDomaine;
use App\Models\ImageDomaine;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('pages.welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accueil()
    {
        return View('pages.accueil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function motPresi()
    {
        return View('pages.presidentWord');
    }

    /**
     * Display the specified resource.
     */
    public function domaineCompetence()
    {
        $collection = Domaine::all();
        return View('pages.competences', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function dashboard()
    {
        return View('backend.accueil');
    }

    /**
     * Update the specified resource in storage.
     */
    public function findDomaine(string $id)
    {
        $finds = Domaine::find($id);
        $collection = SousDomaine::where('domaines_id', '=', $id)->get();
        return view('pages.findDomaine', compact('finds', 'collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function findSousDomaine(string $id)
    {
        $finds = SousDomaine::find($id);
        $collection = ImageDomaine::where('sous_domaines_id', '=', $id)->paginate(2);
        $images = ImageDomaine::where('sous_domaines_id', '=', $id)->paginate(8);
        $activites = Activite::where('sous_domaines_id', '=', $id)->latest()->get();
        return view('pages.findSousDomaine', compact('finds', 'collection', 'images', 'activites'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function findActivite(string $id)
    {
        $finds = Activite::find($id);
        return view('pages.findActivite', compact('finds'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function rapport()
    {
        return view('pages.rapport');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function modeIntervention()
    {
        return view('pages.modeIntervention');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function mediatheque()
    {
        $collection = Mediatheque::all();
        return view('pages.mediatheque', compact('collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function imageSousDomaine(string $id)
    {
        $finds = SousDomaine::find($id);
        $collection = ImageDomaine::where('sous_domaines_id', '=', $id)->get();
        return view('pages.imageSousDomaine', compact('finds', 'collection'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function projetSousDomaine(string $id)
    {
        $finds = SousDomaine::find($id);
        $collection = Projet::where('sous_domaines_id', '=', $id)->get();
        return view('pages.projetSousDomaine', compact('finds', 'collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function realisationSousDomaine(string $id)
    {
        $finds = SousDomaine::find($id);
        $collection = Realisation::where('sous_domaines_id', '=', $id)->get();
        return view('pages.realisationSousDomaine', compact('finds', 'collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function auth()
    {
        return view('backend.auth.login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function login (Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()){
                return redirect()->route('dashboard');
            }
             else {
                return redirect()->route('auth')->with('status', 'Email ou mot de passe incorrect !');
            }
        }

        return redirect()->route('auth')->with('status', 'Email ou mot de passe incorrect !');
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('auth');
    }
}

<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MediathequeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\SousDomaineController;
use Illuminate\Support\Facades\Route;

// Cartographi Domaine  ImageDomaine  Mediatheque  Projet  Rapport  Realisation  SousDomaine

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('page_accueil', [PageController::class, 'accueil'])->name('accueil');

Route::get('mot_du_president', [PageController::class, 'motPresi'])->name('motPresi');

Route::get('Nos_rapports', [PageController::class, 'rapport'])->name('rapport');

Route::get('Apropos_de_nous', [PageController::class, 'about'])->name('about');

Route::get('Mode_intervention', [PageController::class, 'modeIntervention'])->name('modeIntervention');

Route::get('Contactez_nous', [PageController::class, 'contact'])->name('contact');

Route::get('Meditheque', [PageController::class, 'mediatheque'])->name('mediatheque');

Route::get('domaine_de_competences', [PageController::class, 'domaineCompetence'])->name('competences');

Route::get('authentication', [PageController::class, 'auth'])->name('auth');

Route::post('login', [PageController::class, 'login'])->name('login');

Route::get('logout', [PageController::class, 'logout'])->name('logout');

Route::get('dashboard_backend', [PageController::class, 'dashboard'])->name('dashboard');

Route::resource('gestion_domaines', DomaineController::class);
Route::get('detailDomaine/{id}', [PageController::class, 'findDomaine']);
Route::get('supprimer_domaine/{id}', [DomaineController::class, 'destroy']);

Route::resource('gestion_Sous_domaines', SousDomaineController::class);

Route::get('detailSousDomaine/{id}', [PageController::class, 'findSousDomaine']);

Route::get('image_Sous_Domaine/{id}', [PageController::class, 'imageSousDomaine']);

Route::get('projet_Sous_Domaine/{id}', [PageController::class, 'projetSousDomaine']);

Route::get('realisation_Sous_Domaine/{id}', [PageController::class, 'realisationSousDomaine']);

Route::resource('gestion_rapport', RapportController::class);

Route::resource('gestion_mediatheques', MediathequeController::class);

Route::resource('gestion_des_images', ImageController::class);

Route::resource('gestion_activites', ActiviteController::class);
Route::get('detailActivites/{id}', [PageController::class, 'findActivite']);

Route::get("/link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

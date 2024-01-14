<?php

use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

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

// ---------------------        Add Projet
Route::get('/AddProjet', function () {
    return view('AddProjet');
});
// =======================================================================================

//                              Get All Projets
Route::get('/AllProjets',[ProjetController::class,'AllProjets'])->name('AllProjets');
// =======================================================================================

//                              Ajouter un Projet
Route::view('AddProjet','AddProjet');
Route::post('SaveProjet',[ProjetController::class,'SaveProjet']);
// ========================================================================================

//                              Supprimer un Projet
Route::get('SupprimerProjet/{np}',[ProjetController::class,'SaveSupprimerProjet']);
// ========================================================================================

//                              Modification d'un Projet
Route::get('/ModifierProjet/{np}',[ProjetController::class,'ModifierProjet']);
Route::post('/SaveModifierProjet',[ProjetController::class,'SaveModifierProjet']);
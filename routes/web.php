<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home'])->name('homepage');


Route::get('/hello',[HomeController::class,'hello']);


// Route::get('/home', function () {
//     return view('Hello');
// });


Route::get('/article',[HomeController::class,'article'])->name('articlepage');


// *****************************************************************************

Route::get('/patients',[PatientController::class,'patients'])->name('patientspage');
Route::get('/patients/{patient}',[PatientController::class,'Afficher'])
->name('patients.Afficher')
->where('patient','\d+');

Route::delete('/patients/{patient}',[PatientController::class,'supprimer'])
->name('patients.supprimer');

Route::get('/patients/{patient}/modifier',[PatientController::class,'modifier'])
->name('patients.modifier');

Route::put('/patients/{patient}',[PatientController::class,'update'])
->name('patients.update');

Route::get('/patients/Ajouter',[PatientController::class,'Ajouter'])->name('patients.Ajouter');
Route::post('/patients/store',[PatientController::class,'store'])->name('patients.store');



// *****************************************************************************

Route::get('/settings',[SettingsController::class,'settings'])->name('settingspage');



// **********************    Dashboard Routes   ********************************

Route::get('/dash',[DashboardController::class,'dashboard'])->name('dashboardpage');

<?php

use App\Http\Controllers\BackendManager\TacheValidationController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DemandeDeCongesController;
use App\Http\Controllers\Backend\HistoriqueController;
use App\Http\Controllers\Backend\NotificationsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TimesheetController;

use App\Http\Controllers\BackendEmployee\AdminEmpController;
use App\Http\Controllers\BackendEmployee\DemandeDeCongesempController;
use App\Http\Controllers\BackendEmployee\HistoriquempController;
use App\Http\Controllers\BackendEmployee\NotificationsempController;
use App\Http\Controllers\BackendEmployee\ProfilempController;
use App\Http\Controllers\BackendEmployee\TimesheetempController;

use App\Http\Controllers\BackendManager\AdminMController;
use App\Http\Controllers\BackendManager\DemandeDeCongesMController;
use App\Http\Controllers\BackendManager\HistoriqueMController;
use App\Http\Controllers\BackendManager\NotificationsMController;
use App\Http\Controllers\BackendManager\ProfileMController;
use App\Http\Controllers\BackendManager\TimesheetMController;



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
/*

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manager/home', [App\Http\Controllers\HomeController::class, 'managerHome'])->name('manager.home')->middleware('is_admin');

//Route::get('/hr/home', [App\Http\Controllers\HomeController::class, 'hrHome'])->name('hr.home')->middleware('is_admin');
Route::get('/hr/home', [App\Http\Controllers\HomeController::class, 'hrHome'])->name('hr.home')->middleware('is_hr');





//user
//controller -> BackendEmployee/*

Route::get('dashboard',[AdminEmpController::class, 'dashboard'])->name('dashboardemp');
Route::get('profile',[ProfilempController::class, 'profile'])->name('profileemp');
Route::get('timesheet',[TimesheetempController::class, 'timesheet'])->name('timesheetemp');
Route::get('notifications',[NotificationsempController::class, 'notifications'])->name('notificationsemp');
Route::get('demandeDeConges',[DemandeDeCongesempController::class, 'demandeDeConges'])->name('demandeDeCongesemp');
Route::get('historique',[HistoriquempController::class, 'historique'])->name('historique');


    Route::get('/user/delete-tache/{id}', [TimesheetempController::class, 'delete_tache']);
    Route::get('/user/update-tache/{id}', [TimesheetempController::class, 'update_tache']);
    Route::get('/user/ajouter', [TimesheetempController::class, 'ajouter_tache']);
    Route::get('/user/ajouter/{thedate}', [TimesheetempController::class, 'ajouter_tache_jour']);
    
    Route::post('/user/ajouter/traitement', [TimesheetempController::class, 'ajouter_tache_traitement']);
    Route::post('/user/update/traitement', [TimesheetempController::class, 'update_tache_traitement']);





//HR
//controller -> Backend/*

Route::get('dashboard_hr',[AdminController::class, 'dashboard'])->name('dashboard_hr')->middleware('is_hr');
Route::get('profile_hr',[ProfileController::class, 'profile'])->middleware('is_hr');
Route::get('timesheet_hr',[TimesheetController::class, 'timesheet'])->name('timesheet_hr')->middleware('is_hr');
Route::get('notifications_hr',[NotificationsController::class, 'notifications'])->middleware('is_hr');
Route::get('demandeDeConges_hr',[DemandeDeCongesController::class, 'demandeDeConges'])->middleware('is_hr');
Route::get('historique_hr',[HistoriqueController::class, 'historique'])->middleware('is_hr');


Route::prefix('hr')->group(function(){

    Route::get('/delete-tache/{id}', [TimesheetController::class, 'delete_tache'])->middleware('is_hr');
    Route::get('/update-tache/{id}', [TimesheetController::class, 'update_tache'])->middleware('is_hr');
    Route::get('/ajouter', [TimesheetController::class, 'ajouter_tache'])->middleware('is_hr');
    Route::get('/ajouter/{thedate}', [TimesheetController::class, 'ajouter_tache_jour'])->middleware('is_hr');
    Route::post('/ajouter/traitement', [TimesheetController::class, 'ajouter_tache_traitement'])->middleware('is_hr');
    Route::post('/update/traitement', [TimesheetController::class, 'update_tache_traitement'])->middleware('is_hr');
});




//manager
//controller -> BackendManager/*


Route::get('dashboard_manager',[AdminMController::class, 'dashboard'])->name('dashboard_manager')->middleware('is_admin');
Route::get('profile_manager',[ProfileMController::class, 'profile'])->name('profil_manager')->middleware('is_admin');
Route::get('timesheet_manager',[TimesheetMController::class, 'timesheet'])->name('timesheet_manager')->middleware('is_admin');
Route::get('notifications_manager',[NotificationsMController::class, 'notifications'])->name('notification_manager')->middleware('is_admin');
Route::get('demandeDeConges_manager',[DemandeDeCongesMController::class, 'demandeDeConges'])->name('demande_manager')->middleware('is_admin');
Route::get('historique_manager',[HistoriqueMController::class, 'historique'])->name('historique_manager')->middleware('is_admin');


Route::prefix('manager')->group(function(){
    Route::get('/delete-tache/{id}', [TimesheetMController::class, 'delete_tache'])->middleware('is_admin');
    Route::get('/update-tache/{id}', [TimesheetMController::class, 'update_tache'])->middleware('is_admin');
    Route::get('/ajouter', [TimesheetMController::class, 'ajouter_tache'])->middleware('is_admin');
    Route::get('/ajouter/{thedate}', [TimesheetMController::class, 'ajouter_tache_jour'])->middleware('is_admin');
    Route::post('/ajouter/traitement', [TimesheetMController::class, 'ajouter_tache_traitement'])->middleware('is_admin');
    Route::post('/update/traitement', [TimesheetMController::class, 'update_tache_traitement'])->middleware('is_admin');
    Route::get('/validation', [TacheValidationController::class, 'index'])->name('validationp')->middleware('is_admin');
    Route::get('/validatAll', [TacheValidationController::class, 'validatAll'])->name('validatAll')->middleware('is_admin');
    Route::get('/prolongation_tache/{tacheId}', [TacheValidationController::class, 'prolongation_tache'])->name('prolongation_tache')->middleware('is_admin');
    Route::get('/validation/{tacheId}', [TacheValidationController::class, 'validateTache'])->name('validation_tache')->middleware('is_admin');

});








Route::get('/validerTache/{id}', [NotificationsMController::class, 'valider_tache']);
Route::get('/refuserTache/{id}', [NotificationsMController::class, 'refuser_tache']);
Route::get('/suppTache/{id}', [NotificationsempController::class, 'supp_tache']);
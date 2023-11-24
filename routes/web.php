<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KejuruanController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/kejuruan', [KejuruanController::class, 'index'])->name('kejuruan');
Route::get('/tambah_kejuruan', [KejuruanController::class, 'ViewInputKejuruan']);
Route::post('/create_kejuruan', [KejuruanController::class, 'createKejuruan']);
Route::get('/kejuruan/{id}', [KejuruanController::class, 'tampilanEditkejuruan']);
Route::post('/editkejuruan/{id}', [KejuruanController::class, 'editkejuruan']);
Route::get('/deletekejuruan/{id}', [KejuruanController::class, 'deleteKejuruan']);


Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
Route::get('/tambah_alumni', [AlumniController::class, 'tambahAlumni']);
Route::post('/create_alumni', [AlumniController::class, 'createAlumni']);
Route::get('/edit_alumni/{id}', [AlumniController::class, 'viewEditAlumni']);
Route::post('/edit_alumni/{id}', [AlumniController::class, 'editAlumni']);
Route::get('/delete_alumni/{id}', [AlumniController::class, 'hapusAlumni']);
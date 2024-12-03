<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoachController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home.index'); // Panggil halaman beranda
})->name('home');


// Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/teams', [TeamController::class, 'index'])->name('team.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('team.create'); 
Route::post('/teams', [TeamController::class, 'store'])->name('team.store');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('team.show'); 
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('team.edit'); 
Route::put('/teams/{team}', [TeamController::class, 'update'])->name('team.update');
Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('team.destroy'); 



// Daftar routes untuk Coach
Route::get('/coach', [CoachController::class, 'index'])->name('coaches.index');
Route::get('/coach/create', [CoachController::class, 'create'])->name('coaches.create'); 
Route::post('/coach', [CoachController::class, 'store'])->name('coaches.store');
Route::get('/coach/{coach}/edit', [CoachController::class, 'edit'])->name('coaches.edit'); 
Route::put('/coach/{coach}', [CoachController::class, 'update'])->name('coaches.update');
Route::delete('/coach/{coach}', [CoachController::class, 'destroy'])->name('coaches.destroy'); 

Route::get('/news', [NewsController::class, 'index'])->name('news.index'); 
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); 
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
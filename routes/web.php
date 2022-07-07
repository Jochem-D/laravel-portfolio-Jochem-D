<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EasterEggController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [WelcomeController::class, 'show'])->name('welcome.show');

Route::get('/blog', [BlogController::class, 'show']);

Route::get('/easteregg', [EasterEggController::class, 'show']);

Route::get('/dashboard', [GradeController::class, 'index']);

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq', [FaqController::class, 'store'])->middleware('auth');
Route::get('/faq/create', [FaqController::class, 'create'])->middleware('auth');
Route::get('/faq/{faq}', [FaqController::class, 'show'])->name('faq.show');
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit'])->middleware('auth')->name('faq.edit');
Route::put('/faq/{faq}', [FaqController::class, 'update'])->middleware('auth')->name('faq.update');
Route::delete('/faq/{faq}', [FaqController::class, 'delete'])->name('faq.delete');

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/grade/create', [GradeController::class, 'create'])->middleware('auth');
Route::post('/grades', [GradeController::class, 'store'])->middleware('auth');
Route::get('/grade', [GradeController::class, 'show']);
Route::get('/kitsu', [ApiController::class, 'show']);









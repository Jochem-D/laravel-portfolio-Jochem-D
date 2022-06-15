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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/blog', [BlogController::class, 'show']);

Route::get('/easteregg', [EasterEggController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/dashboard', [GradeController::class, 'show']);

Route::get('/faq', [FaqController::class, 'index']);
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq/{faq}', [FaqController::class, 'show'])->name('faq.show');
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit']);
Route::put('/faq/{faq}', [FaqController::class, 'update']);
Route::delete('/faq/{faq}', [FaqController::class, 'delete']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/grade', [GradeController::class, 'show']);
Route::get('/kitsu', [ApiController::class, 'show']);









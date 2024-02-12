<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/annuncio/inserisci', [AnnouncementController::class, 'addAnnouncement'])->name('add-announcement');
Route::get('/dettaglio/annuncio/{announcement}', [PublicController::class, 'showAnnouncement'])->name('announcements_show');
Route::get('/tutti/annunci/', [PublicController::class, 'indexAnnouncement'])->name('announcements_index');
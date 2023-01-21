<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;

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


Route::get('/',[PagesController::class, 'ViewHomePage'])->name('home');

Route::get('contact',[PagesController::class, 'ViewContactPage'])->name('contact');

Route::get('over-ons',[PagesController::class, 'ViewAboutPage'])->name('about');

Route::get('events',[PagesController::class, 'ViewEventsPage'])->name('events');

Route::middleware('auth')->group(function () {
Route::get('show-create-events',[PagesController::class, 'index'])->name('show-create-events');
Route::post('process-create-events',[PagesController::class, 'store'])->name('process-create-events');
Route::get('/edit-event/{id}', [PagesController::class, 'showEditEvents'])->name('show-edit-events');
Route::post('/edit-event/{id}', [PagesController::class, 'processEditEvents'])->name('process-edit-events');
Route::get('/delete-event/{id}', [PagesController::class, 'deleteEvent'])->name('delete-event');
});


require __DIR__.'/auth.php';

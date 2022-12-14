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
route::resource('manage-events',PagesController::class);
});


require __DIR__.'/auth.php';

<?php
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakingContactController;
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
    return view('Content.home');
})->name("home");
Route::get('/contact', function () {
    return view('Content.contact');
});

Route::post('/MailService/Contact', [MakingContactController::class, "MakeContact"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


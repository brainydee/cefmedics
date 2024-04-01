<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;


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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::withoutMiddleware([Authenticate::class])->group(function () {
    Route::get('specialities/oncology', [App\Http\Controllers\PagesController::class, 'oncology'])->name('oncology');
    Route::get('specialities/psyco-oncology', [App\Http\Controllers\PagesController::class, 'psycooncology'])->name('psycooncology');
    Route::get('userdashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('userdashboard');
});

Route::middleware('auth')->group(function(){
    Route::get('appointment', App\Livewire\AppointmentPage::class)->name('appointment');
});

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');



Auth::routes();





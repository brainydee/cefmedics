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
    Route::get('about-us', [App\Http\Controllers\PagesController::class, 'showabout'])->name('about');
});


Route::middleware('auth')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('appointments', App\Livewire\Appointments::class)->name('appointments');
        Route::get('pay', App\Livewire\Paymmentpage::class)->name('pay');
        Route::get('payments', App\Livewire\Paymentslistings::class)->name('payments');
    });

    Route::get('appointment', App\Livewire\Appointmentpage::class)->name('appointment');
    Route::get('userdashboard', App\Livewire\Dashboardhome::class)->name('userdashboard');
    Route::get('pay/callback', [App\Http\Controllers\PaymentController::class, 'handlePaymentData'])->name('pay-data');
});

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');



Auth::routes();





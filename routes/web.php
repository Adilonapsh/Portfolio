<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolios', function () {
    $portfolios = Portfolio::all()->take(9);
    return view('portfolio', compact("portfolios"));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource("/invoice", InvoiceController::class);
        Route::resource("/hr-management", HRController::class);
        Route::resource("/portfolio", PortfolioController::class);
    });
});

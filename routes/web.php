<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/profile', function() {
    return view('profile');
});

Route::resource('organization', OrganizationController::class);

require __DIR__.'/auth.php';

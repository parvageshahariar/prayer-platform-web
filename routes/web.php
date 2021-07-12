<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\Users;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [FrontendController::class, 'index'])->name('login');
Route::post('/doregister',[FrontendController::class,'store']);
Route::post('/dologin',[FrontendController::class,'postlogin']);
Route::get('/dologout', [DashboardController::class, 'dologout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user_profile', [DashboardController::class, 'user_profile']);
Route::post('/post_user_profile', [DashboardController::class, 'post_user_profile']);
Route::get('/users', [Users::class, 'index']);
Route::get('/users/delete/{id}', [Users::class, 'destroy']);
Route::get('/users/ban/{id}', [Users::class, 'do_ban']);
//create org, delete, list
Route::get('/org_list', [OrganizationController::class, 'index']);
Route::get('/create_org', [OrganizationController::class, 'create']);
Route::post('/post_org', [OrganizationController::class, 'store']);
Route::get('/org_list/delete/{id}', [OrganizationController::class, 'destroy']);

Route::get('/prayer_house_list', [PrayerController::class, 'index']);
Route::get('/create_payer_house', [PrayerController::class, 'create']);
Route::post('/post_payer_house', [PrayerController::class, 'store']);
Route::get('/prayer_house/delete/{id}', [PrayerController::class, 'destroy']);
Route::get('/add_user_prayer_house', [PrayerController::class, 'create_add_user_to_prayer_house']); //
Route::post('/post_add_user_prayer_house', [PrayerController::class, 'post_add_user_prayer_house']);


<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

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


Route::view('register', 'register')->name('register');
Route::view('login', 'login')->name('login');
Route::view('dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::get('edit_profile', function (Request $request) {

    return view('edit_profile', [
        'user' => $request->user(), 
    ]);
    
})->middleware('auth')->name('edit_profile');

Route::get('profile', function (Request $request) {

    return view('profile', [
        'user' => $request->user(), 
    ]);

})->middleware('auth')->name('profile');

Route::get('clients', [PassportController::class, 'view_tokens'])->middleware('auth')->name('clients'); 

Route::post('register', [AuthenticationController::class, 'register']);
Route::post('login', [AuthenticationController::class, 'login']);

Route::resource('profile_update', ProfileController::class)->middleware('auth');

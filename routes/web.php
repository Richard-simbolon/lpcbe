<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeadController;
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

Route::get('/', function () {
    return view('index'); 
})->name('index');

Route::get('/success', function () {
    return view('index'); 
})->name('leads.success');

Route::get('/form', function () {
    return view('form');
});
Route::get('/survey', function () {
    return view('survey'); 
});

Auth::routes();

Route::get('/dashboard', 'AdminController@index')->name('adminHome');

Route::get('leads', [AdminController::class, 'index']);
Route::get('leads-data', [AdminController::class, 'getLeadsData'])->name('leads.data');


Route::post('leads', [LeadController::class, 'store'])->name('leads.store');
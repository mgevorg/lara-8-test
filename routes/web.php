<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Available methods: get, post, put, patch, delete, options.
|
| Route::match(['get', 'post'], '/', function () {
| 	//
| });
|
| Route::any('/', function () {
| 	//
| });
|
| Route::middleware(['first', 'second'])->group(function () {
|	//
| });
|
|--------------------------------------------------------------------------
| Subdomains
|--------------------------------------------------------------------------
| Route::domain('{account}.example.com')->group(function () {
|	//
| });
|
|
|--------------------------------------------------------------------------
| Redirect with parameters
|--------------------------------------------------------------------------
|
| return redirect()->route('profile', ['id' => 1]);
|
|
|--------------------------------------------------------------------------
| Redirect toController Actions
|--------------------------------------------------------------------------
|
| return redirect()->action([UserController::class, 'index']);
|
| ** with parameters **
|
| return redirect()->action([UserController::class, 'profile'], ['id' => 1]);
|
|


*/

 Route::get('/', function () {
     return view('welcome');
 });



 Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
	Route::get('/', [AdminController::class, 'index'])->name('index');

     Route::get('/database', [AdminController::class, 'database'])->name('database');
 });



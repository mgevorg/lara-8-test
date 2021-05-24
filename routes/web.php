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
|
|
|
|
|

*/

 Route::get('/', function () {
     return view('welcome');
 });

Route::get('admin', function(){
    return "ADMIN RETURN ARA BOZI TXA";
});

// Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
//	Route::get('/', [ItemController::class, 'index'])->name('index');
//
//     Route::get('/database', [AdminController::class, 'database'])->name('database');
// });



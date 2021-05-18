<?php

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

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('/', function () {
    //
});
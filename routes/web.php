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
*/
 Route::get('test/show/{a}', [App\Http\Controllers\Page::class,'show']);
 Route::get('pages/show/{id}', [App\Http\Controllers\Page::class,'showOne']);
 Route::get('page/show/{id}/{name}', [App\Http\Controllers\Page::class,'showField']);
 Route::get('page/show/{param1}/{param2}', [App\Http\Controllers\Page::class,'showOne2']);
 Route::get('page/show/{a}', [App\Http\Controllers\Page::class,'showOne3']);







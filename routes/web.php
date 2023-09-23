<?php

use Illuminate\Support\Facades\Route;
use Ybazli\Faker\Facades\Faker;

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
    return view('welcome');
});





Route::prefix('/posts')->group(function (){

    Route::get('/{id}',[\App\Http\Controllers\PostController::class, 'show'])->name('post.show');


});

Route::post('/posts/{id}/comment',[\App\Http\Controllers\PostController::class, 'storecomment'])->name('comment.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\PostController::class, 'Adminindex']);

Route::get('/admin', [App\Http\Controllers\PostController::class, 'Userindex']);

Route::get('/admin', [App\Http\Controllers\PostController::class, 'categoryindex']);

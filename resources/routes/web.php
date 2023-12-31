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

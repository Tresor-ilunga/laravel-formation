<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/contact/', [PostController::class, 'contact'])->name('contact');

//Route::get('test', function() {
//    return Response()->json([
//        'name' => 'John Doe',
//        'age' => 20
//    ]);
//});

//Route::get('articles', function () {
//    return view('articles');

//});

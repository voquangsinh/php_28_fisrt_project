<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\V2\PostController as V2PostController;
use Illuminate\Http\Response;
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
    return view('welcome');
})->middleware('author');

Route::group(['prefix' => 'admin', 'middleware' => ['author']], function () {
    // Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');
    // Route::get('/ahihi', function () {
    //     return view('author');
    // })->name('admin.authors');
    // Route::get('/pages', function () {
    //     return view('page');
    // })->name('admin.pages');


    // Route::group(['prefix' => 'v2', 'middleware' => ['nameMiddleware']], function () {
    //     //Create post
    //     Route::get('/post/create', [V2PostController::class, 'create'])->name('admin.v2.post.create');
    //     Route::post('/post/store', [V2PostController::class, 'store'])->name('admin.v2.post.store');

    //     // Show lists post
    //     Route::get('/posts', [V2PostController::class, 'index'])->name('admin.v2.posts');

    //     //edit post
    //     Route::get('/post/{post_id}/edit', [V2PostController::class, 'edit'])->name('admin.v2.edit.post');
    //     Route::post('/post/{post_id}/update', [V2PostController::class, 'update'])->name('admin.v2.edit.update');

    //     //view post
    //     Route::get('/post/{post_id}/show', [V2PostController::class, 'show'])->name('admin.v2.edit.show');

    //     //delete post
    //     Route::post('/post/{post_id}/delete', [V2PostController::class, 'destroy'])->name('admin.v2.delete.post');
    // });

    Route::resource('/author', 'App\Http\Controllers\AuthorController');

    Route::resource('/student', 'App\Http\Controllers\StudentController');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('post.show');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');

Route::get('/admin/register', [RegisterController::class, 'index'])->middleware('guest')->name('auth.register');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest')->name('auth.login');
Route::post('/admin/login', [LoginController::class, 'store']);

Route::get('/admin/logout', [LogoutController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/newpost', [PostController::class, 'index'])->name('post.newpost');
    Route::post('/admin/newpost', [PostController::class, 'store']);
    Route::get('/admin/editpost/{post}/edit', [PostController::class, 'edit'])->name('post.editpost');
    Route::patch('/admin/editpost/{post}', [PostController::class, 'update'])->name('post.updatepost');
    Route::get('/admin/deletepost/{post}', [PostController::class, 'destroy'])->name('post.deletepost');

    Route::get('/admin/newproject', [ProjectController::class, 'newproject'])->name('project.newproject');
    Route::post('/admin/newproject', [ProjectController::class, 'store']);
    Route::get('/admin/newproject/{project}', [ProjectController::class, 'destroy'])->name('project.deleteproject');
});

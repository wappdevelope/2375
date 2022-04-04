<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnsweredController;
use App\Http\Controllers\ContactAsController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SearchController;

// use Illuminate\Support\Facades\Artisan;

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

Route::get('/', [BaseController::class, 'index'])->name('root');
Route::get('find', [SearchController::class, 'search'])->name('search');
Route::get('404/{data}', [BaseController::class, 'r404'])->name('r404');
Route::post('req', [ContactAsController::class, 'req'])->name('req');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [AdminController::class, 'index']);
    Route::get('edit', [AdminController::class, 'edit'])->name('edit');
    Route::get('password-update', [AdminController::class, 'updatePassword'])->name('password-update');

    Route::post('file-upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('file-del/{id}', [UploadController::class, 'del'])->name('del');

    Route::post('preview', [PreviewController::class, 'preview'])->name('preview');

    Route::get('contact-us', [AdminController::class, 'contactUs'])->name('contact-us');

    Route::post('answer/{id}', [AnsweredController::class, 'answer'])->name('answer');
});

// Route::get('migrate', function () {
//     Artisan::call('migrate');
// });

// Route::get('cache', function () {
//     Artisan::call('optimize:clear');
// });

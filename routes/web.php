<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadController;

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
Route::get('find', [BaseController::class, 'search'])->name('find');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [AdminController::class, 'index']);
    Route::get('edit', [AdminController::class, 'edit'])->name('edit');
    Route::get('password-update', [AdminController::class, 'updatePassword'])->name('password-update');

    Route::post('file-upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('file-del/{id}', [UploadController::class, 'del'])->name('del');
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CkeditorController;

Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

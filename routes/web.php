<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/', [ProfileController::class, 'store'])->name('profile.store');
<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;

Route::get('/',[StaticPagesController::class,'home'])->name('home');
Route::get('/help',[StaticPagesController::class,'help'])->name('help');
Route::get('/about',[StaticPagesController::class,'about'])->name('about');
Route::get('signup',[UsersController::class,'create'])->name('signup');

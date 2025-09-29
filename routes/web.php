<?php

use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::get('/team/{teamMember}', [TeamMemberController::class, 'show'])->name('team.show');

Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');

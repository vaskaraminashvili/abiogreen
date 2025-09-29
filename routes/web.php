<?php

use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::get('/team/{teamMember}', [TeamMemberController::class, 'show'])->name('team.show');

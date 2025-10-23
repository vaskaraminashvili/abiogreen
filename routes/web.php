<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubCompanyController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::get('/team/{teamMember}', [TeamMemberController::class, 'show'])->name('team.show');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{news:slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('holdings/{subCompany}', [SubCompanyController::class, 'show'])->name('holdings.show');

Route::view('about', 'about')->name('about');
Route::view('what-we-do', 'what-we-do')->name('what-we-do');
Route::view('sustainability', 'sustainability')->name('sustainability');
Route::view('investors', 'investors')->name('investors');

Route::view('contact', 'contact')->name('contact');
Route::get('test', function () {
    return view('test');
})->name('test');

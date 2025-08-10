<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\SupportTicketController;


Route::view('/', 'index')->name('home');

Route::get('/support', [SupportTicketController::class, 'create'])->name('support.create');
Route::post('/support', [SupportTicketController::class, 'store'])->name('support.store');
Route::get('/support/thank-you', [SupportTicketController::class, 'thankYou'])->name('support.thankyou');

Route::view('/technical-committee', 'technical-committee')->name('technical-committee');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy-policy', 'privacy')->name('privacy');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/tracks', 'tracks.index')->name('tracks.index');
    Route::view('/tracks/Java', 'tracks.java')->name('tracks.java');
    Route::view('/tracks/Python', 'tracks.python')->name('tracks.python');
    Route::view('/tracks/SQL', 'tracks.sql')->name('tracks.sql');

    Route::view('/maps', 'maps')->name('maps');

    Route::redirect('/programming', '/programming/String');
    Route::view('/programming/String', 'programming.string')->name('programming.string');
    Route::view('/programming/Arrays', 'programming.arrays')->name('programming.arrays');
    Route::view('/programming/Stack&Queue', 'programming.stack&queue')->name('programming.stack&queue');
    Route::view('/programming/LinkedLists', 'programming.linkedlists')->name('programming.linkedlists');
    Route::view('/programming/Trees', 'programming.trees')->name('programming.trees');

    Route::view('/articles', 'articles')->name('articles');
    Route::view('/podcast', 'podcast')->name('podcast');

    Route::redirect('/settings', '/settings/profile-information');
    Route::get('/settings/profile-information', ProfileController::class)->name('user-profile-information.edit');
    Route::get('/settings/password', PasswordController::class)->name('user-password.edit');
});
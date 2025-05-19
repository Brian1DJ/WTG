<?php
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'landing');

Route::view('/home', 'homepage');

Route::view('/contacts', 'contacts.index');
Route::get('/search-page', function () {
    return view('account-view.search-page');
});
Route::get('/search', [EventController::class, 'search'])->name('events.search');
Route::view('/help-center', 'helpcenter.index');

Route::view('/account/create', 'account.create');
Route::view('/account/login', 'account.login');
Route::post('/account/login', [AccountController::class, 'login'])->name('account.login');
Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');
Route::post('/account/logout', [AccountController::class, 'logout'])->name('account.logout');

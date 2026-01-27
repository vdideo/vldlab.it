<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/it');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::prefix('{locale}')->where(['locale' => 'it|en'])->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
    Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookie-policy');
});

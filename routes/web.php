<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\VideoSectionController;
use App\Models\VideoSection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $videoSection = VideoSection::getContent();
    return view('welcome', compact('videoSection'));
})->name('home');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/quote', [ContactController::class, 'submitQuote'])->name('quote.submit');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Admin Video Section Management Routes
Route::get('/admin/video', [VideoSectionController::class, 'index'])->name('admin.video.index');
Route::post('/admin/video', [VideoSectionController::class, 'update'])->name('admin.video.update');
Route::post('/admin/video/reset', [VideoSectionController::class, 'resetVideo'])->name('admin.video.reset');


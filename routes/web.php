<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicalRecordController;

// home route
Route::get('/', function () {
    return view('mainpage');
})->name("home");

// feedback route
Route::get("/feedback", [FeedbackController::class, "index"])->name("feedback.index");
Route::post("/feedback", [FeedbackController::class, "store"])->name("feedback.store");

// news route
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news-form', [NewsController::class, 'news_form'])->name('news-form');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

// make appointment route
Route::get('/make-appointment', function () {
    return view('appointment');
})->name('make-appointment');
Route::post("/make-appointment", [AppointmentController::class, "store"])->name("appointment.store");
Route::get('appointment', [AppointmentController::class, 'index']);
Route::resource('appointment', AppointmentController::class);

// medical record route
Route::resource('medical_records', MedicalRecordController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [MedicalRecordController::class, "index"])->name('dashboard');
});


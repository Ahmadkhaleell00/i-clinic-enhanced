<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicalRecordController;

// Home route
Route::get('/', function () {
    return view('mainpage');
})->name("home");

// Feedback routes
Route::get("/feedback", [FeedbackController::class, "index"])->name("feedback.index");
Route::post("/feedback", [FeedbackController::class, "store"])->name("feedback.store");

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news-form', [NewsController::class, 'news_form'])->name('news-form');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

// Appointment routes
Route::get('/make-appointment', function () {
    return view('appointment');
})->name('make-appointment');
Route::post("/make-appointment", [AppointmentController::class, "store"])->name("appointment.store");
Route::get('appointment', [AppointmentController::class, 'index']);
Route::resource('appointment', AppointmentController::class);

// Medical Record routes
Route::resource('medical_records', MedicalRecordController::class);

// 🔐 Authenticated user routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [MedicalRecordController::class, "index"])->name('dashboard');
});

// 🛡 Example of RBAC routes (to be added after RoleMiddleware is set up)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', function () {
        return view('doctor.dashboard');
    });
});

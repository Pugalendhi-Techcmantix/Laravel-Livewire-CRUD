<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('student-list', [StudentController::class, 'viewList'])->name('student-list');
Route::get('student-add', [StudentController::class, 'viewForm'])->name("student-add");
Route::get('student-edit/{id}', [StudentController::class, 'editForm'])->name("student-edit");

Route::get('employee-list', [EmployeeController::class, 'index'])->name('employee-list');
Route::get('status-list', [StatusController::class, 'index'])->name('status-list');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

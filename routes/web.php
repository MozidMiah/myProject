<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//For Studednt
Route::prefix('student')->name('student.')->group(function () {
        Route::get('', [StudentController::class, 'index'])->name('index');
        Route::get('create', [StudentController::class, 'create'])->name('create');
        Route::post('store', [StudentController::class, 'store'])->name('store');

        Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::post('update', [StudentController::class, 'update'])->name('update');

        Route::get('status/{id}', [StudentController::class, 'status'])->name('status');
        Route::get('delete/{id}', [StudentController::class, 'delete'])->name('delete');
    });
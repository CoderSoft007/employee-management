<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\EmployeeController;


Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);

Route::middleware(['ensure.admin'])->group(function () {
    Route::post('/departments', [DepartmentController::class, 'store']);
    Route::post('/employees', [EmployeeController::class, 'store']);
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
});

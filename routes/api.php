<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Return all students as JSON
Route::get('/students', function () {
    return response()->json(Student::all());
});
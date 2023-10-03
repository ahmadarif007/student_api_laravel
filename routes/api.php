<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', [StudentController::class, 'index']);
Route::get('student/{id}', [StudentController::class, 'show']);
Route::post('student/create', [StudentController::class, 'store']);
Route::put('student/edit/{id}', [StudentController::class, 'update']);
Route::delete('student/delete/{id}', [StudentController::class, 'delete']);
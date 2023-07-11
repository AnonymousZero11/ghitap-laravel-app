<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EncounterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*
Route::get('/posts', function () {
    return response()->json("This is the return value.");
});
*/

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/patients', [PatientController::class, 'index']);

Route::prefix('/encounters')->controller(EncounterController::class)->group(function (){
    Route::get('/', 'index');
    Route::post('/', 'store');
});



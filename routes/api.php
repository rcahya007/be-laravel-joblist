<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobQualificationController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('jobs', JobsController::class);
Route::apiResource('company', CompanyController::class);
Route::apiResource('job-category', JobCategoryController::class);
Route::apiResource('job-qualification', JobQualificationController::class);

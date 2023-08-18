<?php


use Modules\Project\Http\Controllers\ProjectController;

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


Route::get('projects',
    [ProjectController::class ,'index']);

Route::get('projects/{id}',
    [ProjectController::class ,'show']);

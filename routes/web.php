<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NavController::class, 'welcome']);
Route::get('characters', [NavController::class, 'characters']);
Route::post('update', [ActionController::class, 'update']);
Route::post('delete', [ActionController::class, 'delete']);
Route::post('add', [ActionController::class, 'add']);
Route::get('addCharacter', [NavController::class, 'addCharacter']);
Route::post('updateCharacter', [NavController::class, 'updateCharacter']);
Route::get('artists', [NavController::class, 'artists']);
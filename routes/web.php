<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\FactoryFacadeController;
use App\Http\Controllers\FactureLineController;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleton', [SingletonController::class, 'show']);
Route::get('/factory', [FactoryController::class, 'show']);
Route::get('/factoryFacade', [FactoryFacadeController::class, 'show']);
Route::get('/sujet', [SujetController::class, 'show']);
Route::get('/facture_line', [FactureLineController::class, 'show']);
Route::get('/template', [TemplateController::class, 'show']);
Route::get('/command', [CommandController::class, 'show']);

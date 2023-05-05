<?php
// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('crudshow', 'CrudController@crudshow');
Route::get('crudshow', [CrudController::class,'crudshow'])->name('crud.showw');
Route::get('cruddelete/{id}', [CrudController::class,'cruddelete']);
Route::get('crud', [CrudController::class,'crudcreate']);
Route::post('crudsubmit', [CrudController::class,'submit']);
Route::get('crudedit/{id}', [CrudController::class,'edit']);
Route::post('crudsubmit/{id}', [CrudController::class,'save'])->name('crud.submit');
// Route::get('/show', function () {
//     return view('show');
// });

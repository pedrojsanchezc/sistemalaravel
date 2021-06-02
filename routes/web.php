<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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


//Route::get('/empleados', [EmpleadosController::class, 'index']); 
//Route::get('/empleados/create', [EmpleadosController::class, 'create']);
//Route::get('/empleados/store', [EmpleadosController::class, 'store']);
//Route::get('/empleados/show', [EmpleadosController::class, 'show']);
//Route::get('/empleados/edit', [EmpleadosController::class, 'edit']);
//Route::get('/empleados/update', [EmpleadosController::class, 'update']);
//Route::get('/empleados/destroy', [EmpleadosController::class, 'destroy']);

Route::resource('empleados', EmployeeController::class);



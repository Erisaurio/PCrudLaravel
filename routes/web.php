<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/empleado', function () {
    return view('Empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class, 'create'] 
*/

Route::get('/empleado/LView', [EmpleadoController::class, 'LoginView']);

Route::post('/empleado/Login', [EmpleadoController::class, 'Login']);

Route::resource('empleado' , EmpleadoController::class);
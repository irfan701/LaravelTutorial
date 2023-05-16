<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view',[EmployeeController::class,'view']);
Route::post('/insert',[EmployeeController::class,'onInsert']);
Route::get('/delete/{id}',[EmployeeController::class,'onDelete']);

//php artisan make:controller EmployeeController
//php artisan make:model EmployeeModel
//php artisan make:migration create_employee
//php artisan migrate
//php artisan make:factory EmployeeModelFactory
//php artisan db:seed

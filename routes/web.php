<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function ()
{
    return 'welcome';
});

//Students
Route::get('/students_index', [StudentController::class, 'index']);
Route::post('/students_store', [StudentController::class, 'store']);

//Programs


//Token
Route::get('/create_token', [StudentController::class, 'create_token']);

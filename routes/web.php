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

Route::get('/students_index', [StudentController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/red', function () {
    $process = new Process(['/home/vince/luxafor-python/luxafor-linux.py color -l 255 -r 0 -g 0 -b 0']);
    $process->run();
});

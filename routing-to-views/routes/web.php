<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route 1: Return a simple "Hello, Laravel!" message
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Route 2: Call the GreetController's method to return a Blade view
Route::get('/greet', [GreetController::class, 'showGreet']);

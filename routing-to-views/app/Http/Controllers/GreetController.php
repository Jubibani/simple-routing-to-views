<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    // Method to return the 'greet' Blade view
    public function showGreet()
    {
        return view('greet');
    }
}

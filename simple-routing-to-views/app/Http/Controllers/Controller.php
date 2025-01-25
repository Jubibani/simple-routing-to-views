<?php

namespace App\Http\Controllers;

class GreetController extends Controller {
    public function showGreetView() {
        
        //returns a view named `greet` which is our blade file.
        return view('greet');

    }
}
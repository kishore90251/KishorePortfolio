<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfoliocontroller extends Controller
{
    

    public function index(){
        return view('portfolio');
    }
}

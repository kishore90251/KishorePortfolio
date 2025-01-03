<?php

use App\Http\Controllers\Portfoliocontroller as ControllersPortfoliocontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Portfoliocontroller;

Route::get('/', [ControllersPortfoliocontroller::class, 'index']);


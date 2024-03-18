<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::post('/link', [LinkController::class, 'store']);
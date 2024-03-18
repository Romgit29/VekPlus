<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/{shortLink}', [LinkController::class, 'shortLinkRedirect']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/states', [App\Http\Controllers\Api\LocationApiController::class, 'states']);

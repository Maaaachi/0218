<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExTestController;

Route::get('/{text?}', [ExTestController::class, 'index']);
<?php

use App\Screens\HomeScreen;
use Illuminate\Support\Facades\Route;
use Salt\Nova\Http\Controllers\ScriptController;
use Salt\Nova\Http\Controllers\StyleController;

// Route::middleware(['web', 'salt.inertia'])->group(function () {
//     Route::get('/salt',  HomeScreen::class);
// });

// Route::group([
//     'prefix' => 'salt-api',
// ], function () {
//     // Scripts & Styles...
//     Route::get('/scripts/{script}', [ScriptController::class, 'index']);
//     Route::get('/styles/{style}', [StyleController::class, 'index']);
// });


Route::get('/',  HomeScreen::class);
<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->user();
});

Route::post('/cadastro', 'ControllerUser@store');

Route::post('/login', 'ControllerUser@login');

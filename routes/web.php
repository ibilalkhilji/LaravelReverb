<?php

use App\Events\ReverbTest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('send', function () {
    ReverbTest::dispatch();
});

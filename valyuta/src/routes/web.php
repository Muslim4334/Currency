<?php


use Muslim\Currency\http\Controllers\CurrencyController;
use Muslim\Currency\http\Controllers\DatabaseController;

Route::get('currency', [CurrencyController::class, 'index']);

Route::post('cost', [DatabaseController::class, 'create'])->name('create');

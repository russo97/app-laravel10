<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::get('/contato', [SiteController::class, 'contact']) -> name('contato.index');

Route::get('/', function () {
    return view('welcome');
});

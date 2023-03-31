<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/en', function () {
    App::setLocale('en');

    return view('index');
})->name('default');

Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'it'])) {
        return redirect()->route('default');
    }

    App::setLocale($locale);

    return view('index');
});

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::post('/store', [HomeController::class, 'store'])->name('homecontroller.store');
Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/lang/{language}', function ($language) {
    if (in_array($language, ['id', 'en'])) {
        App::setLocale($language);
        session(['locale' => $language]);
    }
    
    return redirect()->back();
});


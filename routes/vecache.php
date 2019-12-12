<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Cache Routes
|--------------------------------------------------------------------------
|
| Here is where you can clear all caches
|
*/

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h4>Cache facade value cleared <a href="'.url('/').'">Home</a></h4>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h4>Reoptimized class loader <a href="'.url('/').'">Home</a></h4>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h4>Routes cached <a href="'.url('/').'">Home</a></h4>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h4>Route cache cleared <a href="'.url('/').'">Home</a></h4>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h4>View cache cleared <a href="'.url('/').'">Home</a></h4>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h4>Clear Config cleared <a href="'.url('/').'">Home</a></h4>';
});

Route::get('/cache', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return '<h4>Clear Cache <a href="'.url('/').'">Home</a></h4>';

});

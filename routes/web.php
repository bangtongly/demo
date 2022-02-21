<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/start', function(){
    return view('start');
})->name('start');
Route::get('/wether', function(){
    return view('wether');
});
Route::get('/tab_bar', function(){
    return view('tab_bar');
})->name('tab_bar');

Route::get('/photo_carousel', function(){
    return view('photo_carousel');
})->name('photo_carousel');

Route::get('/lamp', function(){
    return view('lamp');
})->name('lamp');


Route::get('/test', function(){
    return view('test');
})->name('test');

Route::get('/admin-dashboad', function(){
    return view('tailwind');
})->name('admin');

require __DIR__.'/auth.php';

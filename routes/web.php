<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

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
    return view('profile');
})->name('profile');

Route::get('/listen-music', function(){
    return view('listen_music');
})->name('listen_music');

Route::get('/stick-hero', function(){
    return view('game_stick_hero');
})->name('stick_hero');

// Route::get('/timeline', function(){
//     return view('timeline');
// })->name('timeline');

Route::get('timeline', [TimelineController::class, 'getTimeline']);

// Route::middleware(['admin', 'second'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboad', function(){
            return view('tailwind');
        })->name('admin');
        Route::get('/users', function () {
            // Matches The "/admin/users" URL
        });
    });
// });


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
    return view('pages/404');
});



require __DIR__.'/auth.php';

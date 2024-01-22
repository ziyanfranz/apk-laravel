<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerContact;
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

Route::get('/', function () {
    return view('welcome',[
        'title' => 'welcome'
    ]);

});

Route::get('/biodata', function () {
    return view('biodata',[
        'telp' => '081282421456'
    ]);
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', [ControllerContact::class, 'index'] );
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
    $menu = [
        'ChiSiamo',
        'Social',
        'News',
        'Info'
    ];
    return view('Home', ['menu' => $menu]);
});

Route::get('/ChiSiamo', function(){
    $menu = [
        'ChiSiamo',
        'Social',
        'News',
        'Info'
    ];
    return view('ChiSiamo', ['menu' => $menu]);
});

Route::get('/Social', function(){
    $menu = [
        'ChiSiamo',
        'Social',
        'News',
        'Info'
    ];
    return view('Social', ['menu' => $menu]);
});

Route::get('/News', function(){
    $menu = [
        'ChiSiamo',
        'Social',
        'News',
        'Info'
    ];
    return view('News', ['menu' => $menu]);
});

Route::get('/Info', function(){
    $menu = [
        'ChiSiamo',
        'Social',
        'News',
        'Info'
    ];
    return view('Info', ['menu' => $menu]);
});



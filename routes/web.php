<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', static function () {
    return view('home.index', []);
})->name('home.index');

Route::get('/contact', static function () {
    return view('home.contact', []);
})->name('home.contact');

Route::get('/conference/{id}', function ($conferenceId) {
    $conferences = [
        1=>[
            'title' => 'First article',
            'content' => 'First conference text 12345'
        ],
        2=>[
            'title' => 'Second article',
            'content' => 'Second conference text 12345'
        ]
    ];
    return view('conferences.show', ['conference' => $conferences[$conferenceId]]);
})->name('conference.show');


//Route::get('/', function () {
//    return 'Welcome to the home page';
//});

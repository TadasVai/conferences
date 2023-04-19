<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ConferencesController;
use \App\Http\Controllers\Auth\LoginController;


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

//Route::view('/', 'home.index')->name('home.index'); //Sutrumpinta versija, kuri veikia tik atvaizduoti route
//Route::get('/contact', static function () {
//    return view('home.contact', []);
//})->name('home.contact');

Route::get('/', [ConferencesController::class, 'index']) ->name('home.index');
Route::get('/contact', [HomeController::class, 'contact']) ->name('home.contact');

//Route::resource('conferences', ConferencesController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update']);

Route::resource('conferences', ConferencesController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');




//Route::get('/conferences/{id}', function ($conferenceId) {
//    $conferences = [
//        1=>[
//            'title' => 'First article',
//            'content' => 'First conference text 12345'
//        ],
//        2=>[
//           'title' => 'Second article',
//            'content' => 'Second conference text 12345'
//        ]
//    ];
//
//    abort_if(!isset($conferences[$conferenceId]), 404);
//
//    return view('conferences.show', ['conference' => $conferences[$conferenceId]]);
//})->name('conference.show');
//Route::view('/conferences', 'conferences.index') ->name('conferences.index');


//Route::get('/', function () {
//    return 'Welcome to the home page';
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

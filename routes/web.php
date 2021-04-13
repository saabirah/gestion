<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/1', function () {
    return view('welcome');
});
Route::get('/', 'AccueilController@index')->name('accueil');
// Route::get('/', 'AccueilController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/ajouter', 'AccueilController@store')->name('store');

Route::get('/ajouter', function () {
    return view('ajouter')->name('ajouter_livre');
});

Route::get('/classer', function () {
    return view('classer')->name('classer_livre');
});

Route::get('/nemprunt', function () {
    return view('nemprunt')->name('nouveau_emprunt');
});

Route::get('/lemprunt', function () {
    return view('lemprunt')->name('livre_emprunté');
});

Route::get('/nemprunt', function () {
    return view('nemprunt')->name('nouveau_emprunt');
});

Route::get('/lemprunt', function () {
    return view('lemprunt')->name('livre_emprunté');
});

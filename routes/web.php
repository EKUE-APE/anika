<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('home');
});
Route::get('/vitrine', 'App\Http\Controllers\AdminController@vitrine')->name('vitrine');
Route::get('/addentre', 'App\Http\Controllers\AdminController@addentre')->name('addentre');
Route::post('/storeEntreprise', 'App\Http\Controllers\AdminController@storeEntreprise')->name('storeEntreprise');

Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');

Route::get('/comptes', 'App\Http\Controllers\AdminController@comptes')->name('comptes');
Route::get('/allcomptes', 'App\Http\Controllers\AdminController@allcomptes')->name('allcomptes');

Route::post('/store', 'App\Http\Controllers\AdminController@store')->name('store');
Route::get('/adduser', 'App\Http\Controllers\AdminController@adduser')->name('adduser');

Route::get('/deletecompt/{id}', 'App\Http\Controllers\AdminController@destroy')->name('deletecompt');
Route::get('/updatecompt/{id}', 'App\Http\Controllers\AdminController@update')->name('updatecompt');
Route::post('/update/{id}', 'App\Http\Controllers\AdminController@updatestruct');

Route::get('/addReference', 'App\Http\Controllers\AdminController@addReference')->name('addReference');
Route::get('/addNameRefe', 'App\Http\Controllers\AdminController@addNameRefe')->name('addNameRefe');

Route::get('/recuperernomRef-{id}', 'App\Http\Controllers\AdminController@produit');
Route::get('/recupererquartier-{id}', 'App\Http\Controllers\AdminController@quartier');

Route::get('/recupererquartie-{id}', 'App\Http\Controllers\AdminController@quartie');

Route::get('/recupereraddEntre-{id}', 'App\Http\Controllers\AdminController@advilleQuartier');

Route::post('/storeReference', 'App\Http\Controllers\AdminController@storeReference')->name('storeReference');
Route::get('/allReference', 'App\Http\Controllers\AdminController@allReference')->name('allReference');

Route::get('/deleterefer-{id}', 'App\Http\Controllers\AdminController@deleterefer')->name('deleterefer');
Route::get('/updaterefer-{id}', 'App\Http\Controllers\AdminController@updaterefer')->name('updaterefer');

Route::post('/storeName', 'App\Http\Controllers\AdminController@storeName')->name('storeName');

Route::get('/addplat', 'App\Http\Controllers\AdminController@addplat')->name('addplat');
Route::get('/adddessert', 'App\Http\Controllers\AdminController@adddessert')->name('adddessert');
Route::get('/addentree', 'App\Http\Controllers\AdminController@addentree')->name('addentree');
Route::get('/addRestaurant', 'App\Http\Controllers\AdminController@addRestaurant')->name('addRestaurant');


Route::get('/addPays', 'App\Http\Controllers\AdminController@addPays')->name('addPays');
Route::post('/storeCouuntry', 'App\Http\Controllers\AdminController@storeCouuntry')->name('storeCouuntry');

Route::get('/addVille', 'App\Http\Controllers\AdminController@addVille')->name('addVille');
Route::post('/storeVille', 'App\Http\Controllers\AdminController@storeVille')->name('storeVille');

Route::get('/addQuartier', 'App\Http\Controllers\AdminController@addQuartier')->name('addQuartier');
Route::get('/recupererville-{id}', 'App\Http\Controllers\AdminController@ville');

Route::post('/storeQuartier', 'App\Http\Controllers\AdminController@storeQuartier')->name('storeQuartier');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/acces', [App\Http\Controllers\AnnonceController::class, 'acces'])->name('acces');

Route::get('/addHotel', [App\Http\Controllers\AnnonceController::class, 'addHotel'])->name('addHotel');
Route::post('/storeHotel', [App\Http\Controllers\AnnonceController::class, 'storeHotel'])->name('storeHotel');

Route::get('/addAuberge', [App\Http\Controllers\AnnonceController::class, 'addAuberge'])->name('addAuberge');
Route::post('/storeAuberge', [App\Http\Controllers\AnnonceController::class, 'storeAuberge'])->name('storeAuberge');

Route::get('/addLogement', [App\Http\Controllers\AnnonceController::class, 'addLogement'])->name('addLogement');
Route::post('/storeLogement', [App\Http\Controllers\AnnonceController::class, 'storeLogement'])->name('storeLogement');

Route::post('/storeRestaurant', [App\Http\Controllers\AnnonceController::class, 'storeRestaurant'])->name('storeRestaurant');
Route::post('/storEntre', [App\Http\Controllers\AnnonceController::class, 'storEntre'])->name('storEntre');
Route::post('/storePlat', [App\Http\Controllers\AnnonceController::class, 'storePlat'])->name('storePlat');





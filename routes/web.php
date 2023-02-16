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

Route::get('/', function () {
    return view('welcome');
}); 
/*Route::get('/', 'AdminController@index');
 
Route::get('/', function () {
    return view('affichage');
});*/
Route::get('/vitrine', 'App\Http\Controllers\AdminController@vitrine')->name('vitrine');

Auth::routes();
Route::middleware(['auth'])->group(function () {
Route::get('/addentre', 'App\Http\Controllers\AdminController@addentre')->name('addentre');
Route::post('/storeEntreprise', 'App\Http\Controllers\AdminController@storeEntreprise')->name('storeEntreprise');
Route::get('/updateEntreprise/{id}', 'App\Http\Controllers\AdminController@updateEntreprise')->name('updateEntreprise');
Route::post('/editEntreprise/{id}', 'App\Http\Controllers\AdminController@editEntreprise')->name('editEntreprise');

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

Route::get('/deleterefer/{id}', 'App\Http\Controllers\AdminController@deleterefer')->name('deleterefer');
Route::get('/updaterefer/{id}', 'App\Http\Controllers\AdminController@updaterefer')->name('updaterefer');

Route::post('/editrefer/{id}', 'App\Http\Controllers\AdminController@editrefer')->name('editrefer');

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
Route::get('/updatelocalis/{id}', 'App\Http\Controllers\AdminController@updateQ')->name('updatelocalis');
Route::get('/updatelocalis/{id}', 'App\Http\Controllers\AdminController@updateQ')->name('updatelocalis');

Route::post('/editLocalisa/{id}', 'App\Http\Controllers\AdminController@editLocalisa')->name('editLocalisa');




Route::get('/recupererville-{id}', 'App\Http\Controllers\AdminController@ville');

Route::post('/storeQuartier', 'App\Http\Controllers\AdminController@storeQuartier')->name('storeQuartier');
Route::get('/allLocalisation', 'App\Http\Controllers\AdminController@allLocalisation')->name('allLocalisation');
Route::get('/deleteLocalisation/{id}', 'App\Http\Controllers\DeleteController@deleteLocalisation')->name('deleteLocalisation');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    
Route::get('/allEntreprise', [App\Http\Controllers\AnnonceController::class, 'allEntreprise'])->name('allEntreprise');

Route::get('/acces', [App\Http\Controllers\AnnonceController::class, 'acces'])->name('acces');
Route::get('/allAnnonce', [App\Http\Controllers\AnnonceController::class, 'allAnnonce'])->name('allAnnonce');

Route::get('/addHotel', [App\Http\Controllers\AnnonceController::class, 'addHotel'])->name('addHotel');
Route::post('/storeHotel', [App\Http\Controllers\AnnonceController::class, 'storeHotel'])->name('storeHotel');

Route::get('/addAuberge', [App\Http\Controllers\AnnonceController::class, 'addAuberge'])->name('addAuberge');
Route::post('/storeAuberge', [App\Http\Controllers\AnnonceController::class, 'storeAuberge'])->name('storeAuberge');

Route::get('/addLogement', [App\Http\Controllers\AnnonceController::class, 'addLogement'])->name('addLogement');
Route::post('/storeLogement', [App\Http\Controllers\AnnonceController::class, 'storeLogement'])->name('storeLogement');

Route::post('/storeRestaurant', [App\Http\Controllers\AnnonceController::class, 'storeRestaurant'])->name('storeRestaurant');
Route::post('/storEntre', [App\Http\Controllers\AnnonceController::class, 'storEntre'])->name('storEntre');
Route::post('/storePlat', [App\Http\Controllers\AnnonceController::class, 'storePlat'])->name('storePlat');

Route::get('/addPatisserie', [App\Http\Controllers\AnnonceController::class, 'addPatisserie'])->name('addPatisserie');
Route::post('/storePatisserie', [App\Http\Controllers\AnnonceController::class, 'storePatisserie'])->name('storePatisserie');

Route::get('/addBar', [App\Http\Controllers\AnnonceController::class, 'addBar'])->name('addBar');

Route::post('/storeBar', [App\Http\Controllers\AnnonceController::class, 'storeBar'])->name('storeBar');

Route::get('/addFastFood', [App\Http\Controllers\AnnonceController::class, 'addFastFood'])->name('addFastFood');

Route::post('/storeFastFood', [App\Http\Controllers\AnnonceController::class, 'storeFastFood'])->name('storeFastFood');

Route::post('/storeLocation', [App\Http\Controllers\AnnonceController::class, 'storeLocation'])->name('storeLocation');
Route::get('/addLocation', [App\Http\Controllers\AnnonceController::class, 'addLocation'])->name('addLocation');
Route::get('/addBoite', [App\Http\Controllers\AnnonceController::class, 'addBoite'])->name('addBoite');

Route::post('/storeBoite', [App\Http\Controllers\AnnonceController::class, 'storeBoite'])->name('storeBoite');

 
 
 
Route::get('/AlldeleteEntrepris/{id}', 'App\Http\Controllers\DeleteController@deleteEntreprise')->name('AlldeleteEntrepris');

Route::get('/ShowDelete', 'App\Http\Controllers\DeleteController@AlldeleteEntreprise')->name('ShowDelete');
//Route::get('/ShowDelete', 'App\Http\Controllers\DeleteController@deleteEntreprise')->name('ShowDelete');


Route::get('/export', 'App\Http\Controllers\DeleteController@export')->name('export');


Route::post('/storeExpiration', [App\Http\Controllers\AnnonceController::class, 'storeExpiration'])->name('storeExpiration');


Route::post('/storeDate/{id}', [App\Http\Controllers\AnnonceController::class, 'storeDate'])->name('storeDate');
Route::get('/addDate/{id}', [App\Http\Controllers\AnnonceController::class, 'addDate'])->name('addDate');

});
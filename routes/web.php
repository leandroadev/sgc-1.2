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

Route::any('collaborator/search', 'CollaboratorsController@search')->name('collaborators.search')->middleware('auth');
Route::resource('collaborators', 'CollaboratorsController')->middleware(['auth', 'check.is.admin']);

// Route::get('/colaboradores', function() {
//     return view('admin.pages.collaborators.index');
// });

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

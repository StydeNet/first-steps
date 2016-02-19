<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NotesController@index');

Route::get('notes/create', 'NotesController@create');
Route::post('notes', 'NotesController@store');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', 'App\Http\Controllers\PublicController@Boot');

Route::prefix('preset')->group(function () {
    Route::get('add_1', 'App\Http\Controllers\ArtistController@AddArtist');
    Route::get('add_2', 'App\Http\Controllers\AlbumController@AddAlbum');
    Route::get('add_3', 'App\Http\Controllers\MediaController@AddSingleMedia');
    Route::get('add_4', 'App\Http\Controllers\MediaController@AddAlbumSong');
});

Route::get('/artist/{id}', 'App\Http\Controllers\ArtistController@ShowArtistById')->whereNumber('id');
Route::get('/artist/{slug}', 'App\Http\Controllers\ArtistController@ShowArtistBySlug')->name('Artist > Show Artist');

Route::get('/album/{id}', 'App\Http\Controllers\AlbumController@ShowAlbumById')->name('Album > Show Album');

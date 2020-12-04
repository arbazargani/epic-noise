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
    Route::get('add_1', 'App\Http\Controllers\ArtistController@Preset_AddArtist');
    Route::get('add_2', 'App\Http\Controllers\AlbumController@Preset_AddAlbum');
    Route::get('add_3', 'App\Http\Controllers\MediaController@Preset_AddSingleMedia');
    Route::get('add_4', 'App\Http\Controllers\MediaController@Preset_AddAlbumSong');
});

Route::get('/artist/{id}', 'App\Http\Controllers\ArtistController@ShowArtistById')->whereNumber('id');
Route::get('/artist/{slug}', 'App\Http\Controllers\ArtistController@ShowArtistBySlug')->name('Artist > Show Artist');

Route::get('/album/{id}', 'App\Http\Controllers\AlbumController@ShowAlbumById')->name('Album > Show Album');

Route::get('/single/{id}', 'App\Http\Controllers\MediaController@StreamSingle')->name('Single > Play Single');


Route::get('/render_asset/{type}/{media}', 'App\Http\Controllers\PublicController@RenderAsset');
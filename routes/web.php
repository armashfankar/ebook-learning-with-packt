<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', 'Client\PageController@index')->name('client.index');
Route::get('/ebooks', 'Client\PageController@eBooks')->name('client.ebooks');
Route::get('/experts', 'Client\PageController@experts')->name('client.experts');
Route::get('/ebook/{isbn}', 'Client\PageController@eBookDetail')->name('client.ebook.detail');
Route::get('/ebook/render/pdf/{isbn}', 'Client\PageController@eBookPdf')->name('client.ebook.pdf')->middleware('auth');
Route::get('/ebook/chatroom/{isbn}', 'Client\PageController@chatRoom')->name('client.chatroom')->middleware('auth');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.user');
Route::get('/logout', 'Client\PageController@logout')->name('logout');


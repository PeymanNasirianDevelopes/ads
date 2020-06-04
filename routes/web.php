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
Route::get('/resume', 'BaseInfoController@index');
Route::get('/resume/personal/website/{link}/show', 'BaseInfoController@web_site');
Route::get('/resume/pdf/1st/{id}', 'PdfController@index1');
Route::get('/resume/pdf/2nd/{id}', 'PdfController@index2');
Route::get('/resume/pdf/3rd/{id}', 'PdfController@index3');
Route::get('/resume/pdf/4th/{id}', 'PdfController@index4');
Route::get('/resume/pdf/5th/{id}', 'PdfController@index5');
Route::get('/resume/pdf/6th/{id}', 'PdfController@index6');
Route::post('/resume/create', 'BaseInfoController@store');
Route::post('resume/contact_form/create', 'ContactMeController@store');

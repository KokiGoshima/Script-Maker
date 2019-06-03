<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HowToController@index');

Auth::routes();

Route::group(["middleware" => "auth"], function(){

	Route::get("scripts/", "ScriptController@index")->name('scripts.index'); //ファイル一覧画面

	Route::post("scripts/create", "ScriptController@store")->name('scripts.create'); //新規作成処理

	Route::get("scripts/{param}/edit", "ScriptController@edit")->name('scripts.edit'); //編集画面

	Route::put("scripts/{param}/update", "ScriptController@update")->name('scripts.update'); //更新処理

	Route::get("scripts/sample", "ScriptController@showSample")->name('scripts.sample'); //サンプル画面

	Route::delete("scripts/{param}/delete", 'ScriptController@destroy')->name('scripts.delete');

});
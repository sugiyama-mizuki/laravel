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

use \App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// 効果測定3回
Route::resource('sugizon', 'ECController');
Route::get('SUGIZON/look', 'ECController@look');


// 授業用
Route::get('hello', 'HelloController@index')
    ->middleware('auth');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::resource('rest', 'RestappController');
Route::get('hello/rest', 'HelloCountroller@rest');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

// 効果測定
// 1―1
Route::get('kouka1_1', 'Kouka1_1Controller@index');

// 1-2
Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');

// 2-1
Route::get('kouka2_1', 'Kouka2_1Controller@index');
Route::post('kouka2_1/find', 'Kouka2_1Controller@find');

// 2-2
Route::get('kouka2_2', 'Kouka2_2Controller@index');

Route::post('kouka2_2/find', 'Kouka2_2Controller@find');

Route::get('kouka2_2/show', 'Kouka2_2Controller@show');

Route::get('kouka2_2/add', 'Kouka2_2Controller@add');

Route::post('kouka2_2/create', 'Kouka2_2Controller@create');

Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');

Route::post('kouka2_2/update', 'Kouka2_2Controller@update');

Route::get('kouka2_2/del', 'Kouka2_2Controller@del');

Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');




// 実習問題用
// 2-1
Route::get('jissyu','JissyuController@index');

// 3-2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//3-3
Route::get('jissyu5','jissyu3_3Controller@index');

// 4-1
Route::get('jissyu6','jissyu4_1Controller@index');
Route::post('jissyu6', 'jissyu4_1Controller@post');

// 4-2
Route::get('jissyu7','jissyu4_2Controller@index');
Route::post('jissyu7', 'jissyu4_2Controller@post');

// 5-1
Route::get('jissyu10','jissyu5_1Controller@index');
Route::get('jissyu10/show','jissyu5_1Controller@show');

// 6-1
Route::get('jissyu13', 'jissyu6_1Controller@index');
Route::post('jissyu13/find', 'jissyu6_1Controller@find');

// 7-1
Route::resource('jissyu7_1', 'jissyu7_1Controller');
Route::post('jissyu7_1/post', 'jissyu7_1Controlller@find');
Route::get('jissyu7_1/{id}/del', 'jissyu7_1Controller@del');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

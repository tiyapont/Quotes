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
Route::get('/','UserController@getArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@getUser');
Route::get('/admin_article', 'AdminController@getArti');
Route::get('/delUser{id}','AdminController@delUser');
Route::get('/delArticle{article_id}','AdminController@delArticle');

//page คำคม
Route::get('/page1','UserController@getType1');
Route::get('/page2','UserController@getType2');
Route::get('/page3','UserController@getType3');
Route::get('/page4','UserController@getType4');
Route::get('/showpost','UserController@showPost');


//เพิ่มโพส
Route::get('/addpost','UserController@addPost');
Route::post('/AddPostToDB','UserController@AddPostToDB');
//ลบโพส
Route::get('/delArticle{id}','UserController@delArticle');
//แก้ไขโพส
Route::get('/editpost{id}','UserController@editArti');
Route::post('/AddPostToDB','UserController@addnewdata');
// Route::get('/page4','UserController@getType4');

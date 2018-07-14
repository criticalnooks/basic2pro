<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/','HomeController');

Route::resource('/contentc','ContentController');
Route::resource('/contentc-1','Contentc1Controller');
Route::resource('/contentc-2','Contentc2Controller');
Route::resource('/contentc-3','Contentc3Controller');
Route::resource('/contentc-4','Contentc4Controller');
Route::resource('/contentc-5','Contentc5Controller');
Route::resource('/contentc-6','Contentc6Controller');
Route::resource('/contentc-7','Contentc7Controller');
Route::resource('/contentc-8','Contentc8Controller');

Route::resource('/contentpython','ContentPythonController');
Route::resource('/contentpython-1','Contentpython1Controller');
Route::resource('/contentpython-2','Contentpython2Controller');
Route::resource('/contentpython-3','Contentpython3Controller');
Route::resource('/contentpython-4','Contentpython4Controller');
Route::resource('/contentpython-5','Contentpython5Controller');
Route::resource('/contentpython-6','Contentpython6Controller');
Route::resource('/contentpython-7','Contentpython7Controller');
Route::resource('/contentpython-8','Contentpython8Controller');



Route::resource('/exercisesc','ExercisesController');
Route::resource('/exercisesc-1','Exercisesc1Controller');
Route::resource('/exercisesc-2','Exercisesc2Controller');
Route::resource('/exercisesc-3','Exercisesc3Controller');
Route::resource('/exercisesc-4','Exercisesc4Controller');
Route::resource('/exercisesc-5','Exercisesc6Controller');
Route::resource('/exercisesc-6','Exercisesc5Controller');
Route::resource('/exercisesc-7','Exercisesc7Controller');
Route::resource('/exercisesc-8','Exercisesc8Controller');






Route::resource('testc','ExamController');
Route::resource('testpython','ExampythonController');



Route::resource('register', 'RegisterController');


Route::post('login', 'LoginController@getLogin');
Route::get('login', 'LoginController@index');

Route::get('/logout','LoginController@getLogout');


Route::get('forums', 'WebboardController@index');

Route::get('forums/board1', 'board1Controller@index');
Route::get('forums/board1/post', 'board1Controller@postindex');
Route::post('forums/board1/post', 'board1Controller@post');

Route::get('forums/board2', 'board2Controller@index');
Route::get('forums/board2/post', 'board2Controller@postindex');
Route::post('forums/board2/post', 'board2Controller@post');

Route::get('forums/boardcontent/comment/{id}', 'boardcontentController@commentindex'); // เรียกหน้า comment
Route::get('forums/boardcontent/edit/{id}', 'boardcontentController@editthread');    // เรียกหน้า edit thread
Route::get('forums/boardcontent/edit2/{id}', 'boardcontentController@editcomment');  // เรียกหน้า edit comment
Route::get('forums/boardcontent/{id}', 'boardcontentController@show');				 // โชว์หน้ากระทู้	
Route::post('forums/boardcontent','boardcontentController@post');					 // post comemnt
Route::delete('forums/boardcontent/{id}','boardcontentController@destroy');	     // ลบ comment
Route::put('forums/boardcontent/edit/{id}','boardcontentController@updatethread'); // แก้ thread
Route::put('forums/boardcontent/edit2/{id}','boardcontentController@updatecomment'); // แก้ comment

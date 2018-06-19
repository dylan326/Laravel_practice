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



//some examples of what laravel routes can do,  not in our application however
/*
Route::get('/user/{id}', function ($id) {
    
    return 'this is the user ID: '.$id;
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    
    return 'this is the user '.$name. ' with ID: '.$id;
});

Route::get('/hello', function () {
    
    return '<b>hello world</b>';
});

//origional index route 
Route::get('/', function () {
    return view('welcome');
    //return ("hello world");
});*/

Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    
    return view('pages.about');
});






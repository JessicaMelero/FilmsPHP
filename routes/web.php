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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/films'
    ,function(){
        $films = DB::table('films')->get();
        return $films;
    });
Route::get('/films',
    'FilmsController@index');
Route::get('/films/{film}'
    ,'FilmsController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

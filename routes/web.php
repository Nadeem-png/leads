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

Route::get('/', function () {
    return view('home');
});
//Route::get('/admin', function () {
//    return view('admin');
//});


Route::get('/contact/contactus','contactController@contact' );
Route::post('/contact','contactController@store' );

Route::get('/mission', function () {
    return view('mission');
});
Route::get('/chairman', function () {
    return view('chairman');
});
Route::get('/rule', function () {
    return view('rule');
});
Route::get('/admission', function () {
    return view('admission');
});
Route::get('/preeng', function () {
    return view('preeng');
});
Route::get('/premed', function () {
    return view('premed');
});
Route::get('/fa', function () {
    return view('fa');
});
Route::get('/ourteam', function () {
    return view('ourteam');
});







//{Admin Rotes}
Route::namespace('Admin')->middleware('auth:admin')->prefix('/admin')->group(function (){
    Route::get('/student','StudentController@index' );
    Route::get('/student/{student}','StudentController@show');
    Route::get('/student/{student}/edit','StudentController@edit');
    Route::patch('/student/{student}','StudentController@update');
    Route::delete('/student/{student}','StudentController@destroy');
});



//user routes
Route::namespace('User')->group(function (){
    Route::get('/student/create', 'StudentController@create');
    Route::post('/student', 'StudentController@store');
});

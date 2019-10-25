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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact'); 
Route::get('/site/down', 'CommandsController@down');

//Auth Admin
Route::group(array('prefix' => 'manager', 'namespace' => 'Manager', 'as' => 'manager.', 'middleware' => 'admin'), function () {
    //Manage User
    Route::name('users.')->group(function (){
        Route::get('/users','UsersController@index')->name('index');
        Route::get('/users/{id?}/edit','UsersController@edit')->name('edit');
        Route::post('/users/{id?}/edit','UsersController@update')->name('update');
        Route::delete('/users/{id?}/delete','UsersController@destroy')->name('destroy');
    });

    //Manage Role
    Route::name('roles.')->group(function (){
        Route::get('/roles','RolesController@index')->name('index');
        Route::get('/roles/create','RolesController@create')->name('create');
        Route::post('/roles/create','RolesController@store')->name('store');
    });
});

//Auth Manager and Admin
Route::group(array('prefix' => 'manager', 'namespace' => 'Manager', 'as' => 'manager.', 'middleware' => 'manager'), function () {

    //Manage Hotel
    Route::name('hotels.')->group(function (){
        Route::get('/hotels','HotelsController@index')->name('index');
        Route::get('/hotels/create','HotelsController@create')->name('create');
        Route::post('/hotels/create','HotelsController@store')->name('store');
        Route::get('/hotels/{id?}/edit','HotelsController@edit')->name('edit');
        Route::put('/hotels/{id?}/edit','HotelsController@update')->name('update');
        Route::delete('/hotels/{id?}/delete','HotelsController@destroy')->name('destroy');
    });

    //Manage Positions
    Route::name('positions.')->group(function (){
        Route::get('/positions','PositionsController@index')->name('index');
        Route::get('/positions/create','PositionsController@create')->name('create');
        Route::post('/positions/create','PositionsController@store')->name('store');
        Route::get('/positions/{id?}/edit','PositionsController@edit')->name('edit');
        Route::put('/positions/{id?}/edit','PositionsController@update')->name('update');
        Route::delete('/positions/{id?}/delete','PositionsController@destroy')->name('destroy');
    });

    //Manage Staff
    Route::name('staffs.')->group(function (){
        Route::get('/staffs','StaffsController@index')->name('index');
        Route::get('/staffs/create','StaffsController@create')->name('create');
        Route::post('/staffs/create','StaffsController@store')->name('store');
        Route::get('/staffs/{id?}/show','StaffsController@show')->name('show');
        Route::get('/staffs/{id?}/edit','StaffsController@edit')->name('edit');
        Route::put('/staffs/{id?}/edit','StaffsController@update')->name('update');
        Route::delete('/staffs/{id?}/delete','StaffsController@destroy')->name('destroy');
    });

    //Manage Previous Hotel
    Route::name('previous.')->group(function (){
        Route::get('/previous','PreviousHotelsController@index')->name('index');
        Route::get('/previous/hotel/create','PreviousHotelsController@create')->name('create');
        Route::post('/previous/hotel/create','PreviousHotelsController@store')->name('store');
        Route::get('/previous/hotel/{id?}/edit','PreviousHotelsController@edit')->name('edit');
        Route::put('/previous/hotel/{id?}/edit','PreviousHotelsController@update')->name('update');
        Route::delete('/previous/hotel/{id?}/delete','PreviousHotelsController@destroy')->name('destroy');
    });

});

//Auth Staff
Route::middleware(['staff'])->group(function (){
    //Manager Dashboard
    Route::view('/manager','manager.index')->name('manager.dashboard');

    //Hotels
    Route::get('/hotels','HotelsController@index')->name('hotels.index');

    //Positions
    Route::get('/positions','PositionsController@index')->name('positions.index');

    //Staffs
    Route::get('/staffs','StaffsController@index')->name('staffs.index');
    Route::get('/staffs/{id?}/show','StaffsController@show')->name('staffs.show');

    //previous hotels
    Route::get('/previous','PreviousHotelsController@index')->name('previous.index');

});

//Auth
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','Auth\RegisterController@register');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::get('/changePassword','ChangePasswordController@showChangePasswordForm')->name('changePasswordForm');
Route::post('/changePassword','ChangePasswordController@changePassword')->name('changePassword');


//NRC
Route::middleware(['manager'])->group(function () {
    //NRC
    Route::get('/nrc','DataController@getSrs')->name('nrc');
    Route::get('/get/states/{id}','DataController@getStates');
    Route::get('/get/NRC', 'DataController@getNRC')->name('getNRC');
});
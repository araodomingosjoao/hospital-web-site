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

Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function(){

    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('/sobre', 'SiteController@about')->name('site.about');
    Route::get('/contactos', 'SiteController@contacts')->name('site.contacts');
    Route::get('/doctores', 'SiteController@doctors')->name('site.doctors');
    Route::get('/servicos', 'SiteController@services')->name('site.services');
    Route::get('/marcacao/{specialty}', 'SiteController@marking')->name('site.marking');

});

Route::group(['namespace' => 'Auth'], function(){
    
    /** Rota para login */
    Route::get('/login', 'LoginController@formLogin')->name('auth.login');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    
    /** Rota para cadastro de conta */
    Route::get('/register', 'RegisterController@formRegister')->name('auth.register');
    Route::post('/register', 'RegisterController@register')->name('auth.register');
    
    /** Rota para cadastro de conta */
    Route::get('/sair', 'LogoutController@logout')->name('logout');
   
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'check.admin'], function(){
    /** Rota para login */
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::get('/doctor/criar', 'EmployeController@create')->name('admin.employe.create');
    Route::post('/doctor/criar', 'EmployeController@store')->name('admin.employe.store');
});

Route::group(['namespace' => 'Doctor', 'prefix' => 'doctor', 'middleware' => 'check.doctor'], function(){
    /** Rota para login */
    Route::get('/', 'DashboardController@index')->name('doctor.index');
});

Route::group(['namespace' => 'User', 'prefix' => 'paciente', 'middleware' => 'check.patient'], function(){
    /** Rota para login */
    Route::get('/', 'DashboardController@index')->name('patient.index');
});

Route::group(['namespace' => 'User'], function(){
    /** Rota para login */
    Route::post('/marcar-consulta', 'ConsultationController@store')->name('consultation.store');
    Route::get('/cancelar-consulta', 'ConsultationController@destroy')->name('consultation.destroy');
});


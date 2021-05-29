<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('confirmation',function(){
//     return view('auth.passwords.confirm');
// });
//Route::get('/offices/{officeCode}/edit','App\Http\Controllers\OfficesController@edit');
//Route::resource('/servedcustomers/{id}','App\Http\Controllers\ServedcustomersController');
//--------------------------------------------//



// Laravel UI Routes //
Route::auth();
Auth::routes();
// Resources Main Components //
Route::resource('employees', 'App\Http\Controllers\EmployeesController');
Route::resource('customers', 'App\Http\Controllers\CustomersController');
Route::resource('offices', 'App\Http\Controllers\OfficesController');
// Pages Routes //
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\WelcomeController@welcome');
Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@profile')->name('profile');
Route::get('/dashboard/{id}', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::get('/servedcustomers/{id}', 'App\Http\Controllers\ServedcustomersController@getEmployeeCustomers');
Route::get('/offices/{officeCode}/employees', 'App\Http\Controllers\OfficeEmployees@getOfficeEmployees');
Route::get('/employees-no-offices', 'App\Http\Controllers\EmployeesController@getEmployeesNoOffices')->name('employeesnooffice');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('change-password', 'App\Http\Controllers\ChangePasswordController@index');
// Storing Data Routes //
Route::put('/updateoffice/{officeCode}', 'App\Http\Controllers\EmployeesController@updateOffice');
Route::put('/moveoffice/{officeCode}', 'App\Http\Controllers\EmployeesController@moveEmployeeToOffice');
Route::post('change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');

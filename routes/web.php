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


Auth::routes();

Route::get('/', 'HomeController@create')->name('home');
Route::get('/dashboard', 'DashboardController@create')->name('dashboard');

Route::get('/main', 'MainController@create')->name('main');
Route::resource('/user', 'UserController');
Route::resource('/dashboard', 'DashboardController');
Route::resource('/appointment', 'AppointmentController');
Route::resource('/registration', 'RegistrationController');
Route::resource('/medical', 'MedicalController');
Route::resource('/letter', 'LetterController');
Route::get('/letter/patient', 'LetterController@patient')->name('letter.patient');
Route::resource('/report', 'ReportController');

Route::prefix('master')->group(function () {
    Route::resource('/distributor', 'DistributorController');
    Route::resource('/fee', 'FeeController');
    Route::resource('/item', 'ItemController');
    Route::resource('/doctor', 'DoctorController');
    Route::resource('/officer', 'OfficerController');
    Route::resource('/patient', 'PatientController');
    Route::resource('/request', 'RequestController');
    Route::resource('/insurance', 'InsuranceController');
});
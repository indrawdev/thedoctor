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

//Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@create')->name('home');
Route::get('/dashboard', 'DashboardController@create')->name('dashboard');

Route::get('/main', 'MainController@create')->name('main');
Route::resource('/user', 'UserController');
Route::resource('/dashboard', 'DashboardController');
Route::resource('/appointment', 'AppointmentController');
Route::resource('/registration', 'RegistrationController');
Route::resource('/examination', 'ExaminationController');
Route::resource('/medical', 'MedicalController');
Route::get('/letter/create', 'LetterController@create')->name('letter.create');
Route::get('/letter/health', 'LetterController@health')->name('letter.health');
Route::get('/letter/sick', 'LetterController@sick')->name('letter.sick');
Route::get('/letter/statement', 'LetterController@statement')->name('letter.statement');
Route::get('profile/create', 'ProfileController@create')->name('profile.create');
Route::resource('/report', 'ReportController');
Route::resource('/billing', 'BillingController');

Route::prefix('master')->group(function () {
    Route::resource('/supplier', 'SupplierController');
    Route::resource('/distributor', 'DistributorController');
    Route::resource('/fee', 'FeeController');
    Route::resource('/item', 'ItemController');
    Route::resource('/doctor', 'DoctorController');
    Route::resource('/officer', 'OfficerController');
    Route::resource('/patient', 'PatientController');
    Route::resource('/request', 'RequestController');
    Route::resource('/insurance', 'InsuranceController');
});
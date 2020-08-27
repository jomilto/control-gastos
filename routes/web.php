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

Route::resource('/expense_reports','ExpenseReportController');

Route::get('/expense_reports/{id}/confirmDelete','ExpenseReportController@confirmDelete');

Route::resource('expense_reports.expenses','ExpenseController')->only(['create','store']);


// Route::get('/expense_reports/{expense_report}/expenses/create','ExpenseController@create');
// Route::post('/expense_reports/{expense_report}/expenses','ExpenseController@store');
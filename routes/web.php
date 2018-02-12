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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pledge', 'PledgeController@index')->name('pledge');
Route::get('/pledge_transaction_history', 'Pledge_transaction_historyController@index')->name('pledge_transaction_history');
Route::get('/pledgeform', 'PledgeFormController@index')->name('pledgeform');
Route::get('/summary_reports','PledgeController@index_summary')->name('summaryreports');
Route::get('/redemption', 'RedemptionController@index')->name('redemption');

/*Route::get('/pledge_table', 'PledgeFormController@edit')->name('pledge_table');_
Route::get('/pledge_table', 'PledgeformController@delete')->name('pledge_table')*/
Route::get('/pledge-edit-form', 'PledgeFormController@redirect_edit_form')->name('pledge-edit-form');
Route::post('/pledge_table', 'PledgeFormController@insert')->name('pledge_table');
Route::get('/pledge_table', 'PledgeFormController@delete')->name('pledge_table');
Route::get('/pledge_table', 'PledgeFormController@display')->name('pledge_table');
Route::get('/pledgeform/{type}', 'PledgeFormController@downloadExcel');


/*Route::post('/importExcel', 'MaatWebsiteDemoController@importExcel');
Route::get('/downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');*/


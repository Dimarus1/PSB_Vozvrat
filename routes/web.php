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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PSBController@AllData');

Route::post('/test', function () {
    return view('test');
})->name('test-form');


/*Route::post('/back', 'PSBController@DMcommit');*/  /* post--- */

Route::get('/chek', 'PSBController@AllData');

Route::get('/chek/{id}', 'PSBController@OneData')->name('OneDatal');

Route::get('/chekbank/{id}', 'PSBController@ChekBank')->name('Bank');

Route::get('/refund/{id}', 'PSBController@RefundMoney')->name('Ref');

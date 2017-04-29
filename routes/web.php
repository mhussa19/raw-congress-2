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

Route::get('/index', function () {
    return view('index');
});

Route::get('/bills', 'BillsController@getAllBills');
Route::get('/bills/{bill_id}', 'BillsController@getBill');

Route::get('/members/{members}', 'MembersController@getAllMembers');
Route::get('/members/{member_id}', 'MembersController@getMember');

Route::get('/committees', 'CommitteeController@getAllCommittees');
Route::get('/committee/{committee_id}', 'CommitteeController@getCommittee');

Route::get('/search', 'SearchController@getAll');

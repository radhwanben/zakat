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
    alert()->success('الموقع يعمل بالدينار التونسي ', 'هذا الموقع يعمل حسب فقه الإمام مالك')->autoclose(5000);
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    
    return view('contact');
})->name('contact');

Route::get('zakaty',[
	'uses' =>'ZakatController@show',
	'as'=>'Zakaty'

]);


Route::get('zakaty/gold',[
	'uses' =>'ZakatController@goldshow',
	'as'=>'Zakatyglod'

]);


Route::post('zakaty/gold',[
	'uses' =>'ZakatController@calculategold',
	'as'=>'Zakatyglodcal'

]);



Route::get('zakaty/silver',[
	'uses' =>'ZakatController@silvershow',
	'as'=>'Zakatysilver'

]);


Route::post('zakaty/silver',[
	'uses' =>'ZakatController@calculatesilver',
	'as'=>'Zakatysilvercal'

]);




Route::get('zakaty/money',[
	'uses' =>'ZakatController@moneyshow',
	'as'=>'Zakatymoney'

]);


Route::post('zakaty/money',[
	'uses' =>'ZakatController@calculatemoney',
	'as'=>'Zakatymoneycal'

]);
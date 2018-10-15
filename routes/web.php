<?php

//Route::any('/class', function () {
//   return view('welcomes');
//});


//Route::post('/post', function () {
   //return view('welcome');
//});

//Route::match(['put','post'],'/checkmatch', function () {
//   return view('welcome');
//});

//Route::get('controller_check','practiseController@methodName');




Route::get('/blade-template1/{param1}/{param2}', function () {
	$array = ['a','b','c'];
   return view('index.blad.php',compact('data'));
});

Route::get('/blade_template1/{param}',
'practiseController@methodNameCheck');




oute::get('/blade-template2/{param1}/{param2}', function () {
	$array = ['a','b','c'];
   return view('index.blad.php',compact('data'));
});

Route::get('/blade_template2/{param}',
'practiseController@methodNameCheck');




Route::get('/blade-template2/{param}', function () {
	$array = ['a','b','c'];
   return view('index.blad.php',compact('data'));
});

Route::get('/blade_template1/{param}',
'practiseController@methodNameCheck');





Route::get('controller_check/{param}','practiseController@methodName');

Route::get('controller_check/{param}','practiseController@methodName')->where(['param'=>'[0-9]+']);


Route::get('multiple/{data1}/{data2}','practiseController@methodMulti')->where(['data1'=>'[0-9]+','data2'=>'[A-Za-z]+']);


Route::prefix('admin')->group(function(){
	Route::get('dashboard','practiseController@methodName1');
	Route::get('controller2','practiseController@methodName2');
});


Route::prefix('user')->group(function(){
	Route::get('dashboard','practiseController@methodName1');
	Route::get('controller2','practiseController@methodName2');
});


Route::namespace('Admin')->group(function(){
	Route::get('dashboard','practiseController@methodName1');
	Route::get('controller2','practiseController@methodName2');
});


Route::group(['prefix'=>'Customer','namespace'=>'Customer'],function(){
	Route::get('dashboard','practiseController@methodName1');
});
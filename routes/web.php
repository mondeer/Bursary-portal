<?php

Route::get('/', function () {
    return view('welcome');
});

// blogs start
Route::get('newblog', 'BlogCtrl@index');

Route::post('newblog', 'BlogCtrl@postCreate');

Route::get('topblogs', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Route::get('topclass/adminblogs', 'BlogCtrl@adminBlogs');

// end blogs

Route::post('subscribe', 'SubCtrl@Subscribe');

//Admin routes;
Route::get('/system/register', 'RegisterCtrl@register');

Route::post('/system/register', 'RegisterCtrl@postRegister');

Route::get('login', function(){
  return view('auth.login');
});
Route::post('login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

// constituency admin routes
Route::get('/system/admin', function(){
  return view('admin.home');
});

Route::get('/bursary/admin/view', function(){

});

Route::get('/bursary/admin/view', function(){

});

// village rep
Route::get('/village-rep/admin', function(){
  return view('village_cdf.index');
});


// students routes
Route::get('/student/dashboard', function(){
  return view('students.index');
});

Route::get('/bursary/student/approved', function(){

});

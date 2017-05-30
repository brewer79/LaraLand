<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group([], function () { // ['middleware'=>'web']

    Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']); // страница отдельного материала

    Route::auth();
});

// admin/service{page, about, portfolio}
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {

    // admin
    Route::get('/', function(){
        if(view()->exists('admin.index')){
            $data = ['title' => 'Панель администратора'];

            return view('admin.index', $data);
        }

    });

    // admin/pages
    Route::group(['prefix'=>'pages'], function(){

        // admin/pages
        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);

        // admin/pages/add
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);

        // admin/edit/3 <={number}
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'sliders'], function(){

        Route::get('/', ['uses'=>'SliderController@execute', 'as'=>'slider']);
        Route::match(['get', 'post'], '/add', ['uses'=>'SliderAddController@execute', 'as'=>'sliderAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{slider}', ['uses'=>'SliderEditController@execute', 'as'=>'sliderEdit']);
    });

    Route::group(['prefix'=>'about'], function(){

        Route::get('/', ['uses'=>'AboutController@execute', 'as'=>'about']);
        Route::match(['get', 'post'], '/add', ['uses'=>'AboutAddController@execute', 'as'=>'aboutAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{about}', ['uses'=>'AboutEditController@execute', 'as'=>'aboutEdit']);
    });

    Route::group(['prefix'=>'portfolios'], function(){

        Route::get('/', ['uses'=>'PortfoliosController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfoliosAddController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfoliosEditController@execute', 'as'=>'portfolioEdit']);
    });

    Route::group(['prefix'=>'services'], function(){

        Route::get('/', ['uses'=>'ServicesController@execute', 'as'=>'services']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServicesAddController@execute', 'as'=>'serviceAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServicesEditController@execute', 'as'=>'serviceEdit']);
    });
});
Route::auth();

Route::get('/home', 'HomeController@index');

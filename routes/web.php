<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['uses'=>'PagesController@getHome',
    'as'=>'home'
]);

Route::get('contact',['uses'=>'PagesController@getContact',
    'as'=>'contact'
]);

Route::get('b2bIntegration',['uses'=>'PagesController@getb2bIntegration',
    'as'=>'b2bintegration'
]);

Route::get('apiIntegration',['uses'=>'PagesController@getapiIntegration',
    'as'=>'apiIntegration'
]);

Route::get('about',['uses'=>'PagesController@getAboutUs',
    'as'=>'about'
]);

Route::get('Clients',['uses'=>'PagesController@getClients',
    'as'=>'clients'
]);

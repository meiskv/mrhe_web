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

Route::get('/', function () {
    return redirect()->to('admin');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {


    
    Route::resource('/','Admin\AdminController');

    Route::group(['middleware' => ['role:admin']], function()
    {	
        Route::resource('user','Admin\UserController');
        Route::resource('role','Admin\RoleController');
        Route::resource('post','Admin\PostController');


       Route::resource('muhesnah','Admin\MuhesnahController',
            ['only'=>['edit','store','update','create']]
            );

        Route::controller('muhesnah', 'Admin\MuhesnahController', [
            'anyData'  => 'muhesnah.data',
            'getIndex' => 'muhesnah',
        ]);



        Route::resource('data','Admin\TableController',
            ['only'=>['edit','store','update','create','pogiAkoEh']]
            );

        Route::controller('data', 'Admin\TableController', [
            'anyData'  => 'datatables.data',
            'getIndex' => 'datatables',
        ]);

    });

    

});

Route::group(['prefix' => 'api/v1' ], function () {
    Route::resource('user','Api\UserApiController');
});

Route::controllers(['auth' => 'Auth\AuthController']);
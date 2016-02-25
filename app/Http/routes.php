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
        /* User Route & Controller */
        Route::resource('user','Admin\UserController',
            ['only'=>['edit','store','update','create','destroy','index']]
            );
        Route::controller('user', 'Admin\UserController', [
            'anyData'  => 'users.data',
        ]);
        /* ----User Route End---- */

        Route::resource('role','Admin\RoleController');
        Route::resource('post','Admin\PostController');

    });

        /* User Qouz & Controller */
       Route::resource('qouz','Admin\QouzController',
            ['only'=>['edit','store','update','create','index']]
            );

        Route::controller('qouz', 'Admin\QouzController', [
            'anyData'  => 'qouz.data',
            'getIndex' => 'qouz',
        ]);
        /* ----Qouz Route End---- */

        /* User Muhesnah & Controller */
       Route::resource('muhesnah','Admin\MuhesnahController',
            ['only'=>['edit','store','update','create']]
            );

        Route::controller('muhesnah', 'Admin\MuhesnahController', [
            'anyData'  => 'muhesnah.data',
            'getIndex' => 'muhesnah',
        ]);
        /* ----Muhesnah Route End---- */

        /* Data Route & Controller */
        Route::resource('data','Admin\TableController',
            ['only'=>['edit','store','update','create']]
            );

        Route::controller('data', 'Admin\TableController', [
            'anyData'  => 'datatables.data',
            'getIndex' => 'datatables',
        ]);
        /* ----Data Route End---- */

        /* Muteena Route & Controller */
        Route::resource('muteena','Admin\MuteenaController',
            ['only'=>['edit','store','update','create']]
            );

        Route::controller('muteena', 'Admin\MuteenaController', [
            'anyData'  => 'muteena.data',
            'getIndex' => 'muteena',
        ]);
        /* ----Muteena Route End---- */

});

Route::group(['prefix' => 'api/v1' ], function () {
    Route::resource('user','Api\UserApiController');
});

Route::controllers(['auth' => 'Auth\AuthController']);
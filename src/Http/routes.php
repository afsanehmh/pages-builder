<?php



Route::group(['middleware' => ['web']], function () {
    Route::group(['namespace' => 'Tarnama\Pages\Http\Controllers', 'prefix' => 'page'], function() {
        Route::get('/show/{id}/{title}','Page\PagesController@indexPage');
        Route::get('/','Page\PagesController@index');
        Route::get('/create','Page\PagesController@create');
        Route::put('/store','Page\PagesController@store');
        Route::get('/{id}/delete','Page\PagesController@delete');
        Route::get('/{id}/edit','Page\PagesController@edit');
        Route::patch('update','Page\PagesController@update');
    });
});

<?php

    
    Route::group(['namespace' => 'kumarrahul\rchat\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('chat', 'ChatController@index');
    });
    
?>
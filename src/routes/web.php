<?php

use Yogesmhrj\LaravelJslogs\Controllers\JsLogController;

Route::group(['prefix' => 'hop'],function(){

    Route::post('logs/js/store',[JsLogController::class,'storeLog']);

});


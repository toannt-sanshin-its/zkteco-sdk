<?php

Route::group(['namespace'=>'Sanshin\Zkteco\Http\Controllers'],function (){
    Route::get('zkteco','ZktecoController@index');
});

\Illuminate\Support\Facades\Route::get('test',function (){
   return "ok";
});

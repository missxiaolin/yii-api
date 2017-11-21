<?php
use cyneek\yii2\routes\components\Route;


// 路由组
Route::group(['prefix' => 'v1', 'filter' => 'auth'], function () {
    // 子路由
    Route::any('user/index', 'v1/user/index');
});
<?php
use cyneek\yii2\routes\components\Route;

// 是否登录 过滤器
Route::filter('auth', [
    'class' => \common\components\filter\AppAuth::className(),
]);

// 路由组
Route::group(['prefix' => 'v1', 'filter' => 'auth'], function () {
    // 子路由
    Route::any('user/index', 'v1/user/index');
});
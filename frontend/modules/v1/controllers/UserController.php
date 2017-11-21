<?php
namespace frontend\modules\v1\controllers;

use xiaolin\Support\Str;
use Yii;

class UserController extends BaseController
{
    /**
     * 首页（测试用）
     * @return array
     */
    public function actionIndex()
    {
        dump(Str::random(6));
    }
}
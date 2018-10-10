<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 05.10.18
 * Time: 12:36
 */

namespace app\modules\api\controllers;


use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
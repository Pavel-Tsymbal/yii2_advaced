<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 03.10.18
 * Time: 10:13
 */

namespace app\modules\api\controllers;

use app\modules\api\apiActions\newsActions\NewsCreateAction;
use app\modules\api\apiActions\newsActions\NewsDeleteAction;
use app\modules\api\apiActions\newsActions\NewsUpdateAction;
use app\modules\news\models\News;
use yii\rest\ActiveController;

class ApiNewsController extends ActiveController
{
    public $modelClass = News::class;

    public function actions()
    {
        $actions = parent::actions();

        $actions['delete'] = [
            'class' => NewsDeleteAction::class,
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];

        $actions['create'] = [
            'class' => NewsCreateAction::class,
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];

        $actions['update'] = [
            'class' => NewsUpdateAction::class,
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];

        return $actions;
    }
}
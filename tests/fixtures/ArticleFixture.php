<?php

namespace backend\tests\fixtures;

use app\modules\news\models\News;
use yii\test\ActiveFixture;

class ArticleFixture extends ActiveFixture
{
    /** @var string  */
    // public $modelClass = 'app\modules\news\models\News';

    /**
     * ArticleFixture constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->tableName = News::tableName();

        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function unload()
    {
        parent::unload();

        News::deleteAll();
    }
}

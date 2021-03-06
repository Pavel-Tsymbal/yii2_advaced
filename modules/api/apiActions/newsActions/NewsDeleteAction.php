<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 03.10.18
 * Time: 10:19
 */

namespace app\modules\api\apiActions\newsActions;

use app\modules\api\controllers\ApiNewsController;
use app\services\NewsService;
use yii\rest\DeleteAction;

class NewsDeleteAction extends DeleteAction
{
    protected $newsService;

    public function __construct(
        $id,
        ApiNewsController $controller,
        NewsService $newsService,
        array $config = [])
    {
        parent::__construct($id, $controller, $config);

        $this->newsService = $newsService;
    }

    public function run($id)
    {
        return $this->newsService->delete($id);
    }

}
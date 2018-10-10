<?php namespace backend\tests;

use backend\tests\fixtures\ArticleFixture;

class UpdateArticleCest extends BaseTestCase
{
    // tests
    public function tryToTest(ApiTester $I)
    {
    }

    public function fixtures()
    {
        return [
            'articles' => [
                'class' => ArticleFixture::class,
                'dataFile' => codecept_data_dir() . 'news.php'
            ],
        ];
    }

    public function updateArticleViaAPI(ApiTester $I)
    {
        $I->sendGET('http://rabotay-suka.com/api/api-news');
        $testArray = json_decode($I->grabResponse(), true);
        $id = end($testArray)['id'];

        $I->sendPUT('http://rabotay-suka.com/api/api-news/' . $id,['title'=>'update test','description' => 'new description','text'=>'new text']);
        $I->seeResponseIsJson('{"true"}');
        $I->seeResponseCodeIs(200);
        $I->grabResponse();
    }
}

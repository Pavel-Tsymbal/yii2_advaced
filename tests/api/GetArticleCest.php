<?php namespace backend\tests;

class GetArticleCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }

    public function _fixtures()
    {
        return [
            'profiles' => [
                'class' => ArticleFixture::className(),
                // fixture data located in tests/_data/user.php
                'dataFile' => codecept_data_dir() . 'news.php'
            ],
        ];
    }

    public function getArticleViaAPI(ApiTester $I)
    {
        $I->sendGET('http://rabotay-suka.com/api/api-news');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->grabResponse();
    }
}

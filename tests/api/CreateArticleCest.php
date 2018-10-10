<?php namespace backend\tests;

class CreateArticleCest
{
    public function _before(ApiTester $I)
    {

    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }

    public function createArticleViaAPI(ApiTester $I)
    {
        $I->sendPOST('http://rabotay-suka.com/api/api-news', ['title' => 'api_test', 'description' => 'test2', 'text' => 'test2']);
        $I->seeResponseIsJson('{"true"}');
        $I->seeResponseCodeIs(200);
        $I->grabResponse();
    }
}

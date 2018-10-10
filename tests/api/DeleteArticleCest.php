<?php namespace backend\tests;

class DeleteArticleCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }

    public function deleteArticleViaAPI(ApiTester $I)
    {
        $I->sendGET('http://rabotay-suka.com/api/api-news');
        $testArray = json_decode($I->grabResponse(), true);
        $id = end($testArray)['id'];

        $I->sendDELETE('http://rabotay-suka.com/api/api-news/' . $id);
        $I->seeResponseIsJson('{"1"}');
        $I->seeResponseCodeIs(200);
        $I->grabResponse();
    }
}

<?php namespace backend\tests;

use app\modules\news\models\News;

class ArticleTest extends \Codeception\Test\Unit
{
    /**
     * @var \backend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function testValidation()
    {
        $article = new News();

        $article->setTitle(null);
        $this->assertFalse($article->validate(['title']));
    }
}
<?php

namespace backend\tests;

use backend\tests\fixtures\ArticleFixture;

class  BaseTestCase
{
    /** @var array */
    protected $fixtures = [
        ArticleFixture::class
    ];

    /**
     * @param FunctionalTester $I
     */
    protected function loadFixture(FunctionalTester $I): void
    {
        method_exists($I, 'setFixtures') ? $I->setFixtures($this->fixtures) : $I->haveFixtures($this->fixtures);
    }

    /**
     * @param FunctionalTester $I
     */
    protected function getFixtureData(FunctionalTester $I, $fixtureName): void
    {
        method_exists($I, 'getFixtureData') ? $I->getFixtureData($fixtureName) : $I->grabFixture($fixtureName);
    }

    public function _before(FunctionalTester $I)
    {
        $this->loadFixture($I);
    }
}

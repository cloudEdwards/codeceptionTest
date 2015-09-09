<?php
use \AcceptanceTester;

class TestCodeceptCest
{

    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/test.php');
        $I->see('HIYA');
        $I->uncheckOption('#rs-test-mode-enabled');
        $I->dontSeeCheckboxIsChecked('#rs-test-mode-enabled');
    }
}
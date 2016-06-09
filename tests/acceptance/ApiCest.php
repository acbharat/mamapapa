<?php


class ApiCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function verifyCategoriesApiEndpoint(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\ApiSteps($scenario);
        $data = $I->getNameAndIdFromEachNode();
//        $I->verifyResponseHasValidObjects($data);

    }
}

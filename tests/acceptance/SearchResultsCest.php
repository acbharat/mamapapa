<?php


class SearchResultsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function verifyBasicElementsOnSearchResultsPage(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\SearchResultsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure that user can able to basic elements on search results page");
        $I->seeBasicElementsOnSearchResultsPage();

    }
    /**
     * Check user can able to decrease quantity
     * @group bx3
     */
    public function verifyUserToSearchForProduct(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\SearchResultsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure that user can able to search for product");
        $I->searchForProduct("red");
        $I->seeBasicElementsOnSearchResultsPage();
    }

    public function searchWithKeywordNoItemsWithThisKeyword(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\SearchResultsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure that user can able to see any listings if he search with no items with this keyword");
        $I->searchForProductWithKeyword("red");
    }

}

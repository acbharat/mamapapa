<?php


class ProductDetailsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @group buy
     */

    public function verifyBasicElementsOnProductDetailsPage(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to basic elements on Product Details page");
        $I->searchForProduct("red");
        $I->seeBasicElementsOnProductDetailsPage();
    }

    public function verifyUserCanAbleToSeeThumbnails(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to see thumbnails if there's more than one image on Product Details page");
        $I->searchForProduct("red");
        $I->seeThumbnailsWithProductMoreThanOneImage();
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to see change in Image upon clicking thumbnails");
        $I->seeImageChangesUponClickingThumbnails();
    }

    public function verifyUserCanAbleToIncreaseOrDecreaseQuantityBar(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to increase quantity on Product Details page");
        $I->searchForProduct("red");
        $I->seeUserIncreasesQuantity();
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to decrease quantity on Product Details page");
        $I->searchForProduct("red");
        $I->seeUserDecreaseQuantity();
    }

    public function verifyLoginPopupByClickingFavoritesButton(AcceptanceTester $I, $scenario)
    {
        $I = new AcceptanceTester\ProductDetailsSteps($scenario);
        $I->navigateToHomePage();
        $I->wantTo("ensure user can able to see Login popup when Favorites clicked on Product Details page");
        $I->searchForProduct("red");
        $I->seeLoginPopupAppearsWhenFavoritesButtonClicked();

    }
}

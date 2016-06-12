<?php

class SearchResultsPage
{
    // include url of current page
    public static $URL = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */

    public static $searchField = ".input-field";
    public static $searchResultsHeader = "/html/body/div[2]/h1";
    public static $searchInputField = "/html/body/div[1]/form/div[1]/input[1]";
    public static $searchIcon = "input[type=submit]";
    public static $sortingField = "/html/body/div[2]/section/div/div[1]";
    public static $categoryFilters = ".category-filters";
    public static $refineCategory = "#body > div:nth-child(2) > section > aside > div > div:nth-child(1)";
    public static $refineProduct = "#body > div:nth-child(2) > section > aside > div > div:nth-child(2)";
    public static $refineProductByColor = "#body > div:nth-child(2) > section > aside > div > div:nth-child(2) > div:nth-child(2)";
    public static $refineProductBySize = "#body > div:nth-child(2) > section > aside > div > div:nth-child(2) > div:nth-child(3)";
    public static $refineProductByRating = "#login-button";
    public static $loadMore = "/html/body/div[2]/section/div/a";
    public static $searchDropDownValue = "body > div:nth-child(1) > form > div.dropdown > div > a:nth-child(1)";



    public static function route($param)

    {
        return static::$URL.$param;
    }


}
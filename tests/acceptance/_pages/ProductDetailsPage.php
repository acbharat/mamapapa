<?php
class ProductDetailsPage
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
    public static $breadcrumb = "#login-button";
    public static $productImages = "#locale-changer";
    public static $productThumbnails = "/html/body/div[2]/div[2]/div[1]/div[2]";
    public static $productInformation = "#find-a-store";
    public static $productPrice = "#logo";
    public static $productRatingAndID = ".product-rating-and-id";
    public static $selectColor = "#body > div:nth-child(1) > nav";
    public static $selectQuantity = "#input-field";
    public static $selectQuantityIncrease = "#input-field";
    public static $selectQuantityDecrease = "#input-field";
    public static $addToBagButton = "#login-button";
    public static $deliveryInformation = "#login-button";
    public static $favorites = "#social-media";
    public static $giftRegistery = "#login-button";
    public static $productInfo = "#login-button";
    public static $productInfoDetailsTab = "#login-button";
    public static $productInfoDeliveryTab = "#login-button";


    public static function route($param)
    {
        return static::$URL . $param;
    }
}
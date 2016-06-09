<?php

namespace AcceptanceTester;
use GuzzleHttp;
class ApiSteps extends \AcceptanceTester

{

    public function getNameAndIdFromEachNode()
    {
        $client = new GuzzleHttp\Client();
        $url = "http://apitest.mamasandpapas.ae/categories";
        $response = $client->get($url);
        $search_content = json_decode($response->getBody()->getContents(), true);
        return $search_content;
    }

//    public function verifyResponseHasValidObjects($data)
//    {
//        $I = $this;
//        $I->assert
//    }

}
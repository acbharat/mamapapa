<?php

namespace AcceptanceTester;

class ApiSteps extends \AcceptanceTester

{

    public function getLatestEmailFromMandril($id, $name)
    {

        $client = new GuzzleHttp\Client();
        $url = "http://apitest.mamasandpapas.ae/categories";
        $headers = ["Content-Type" => "application/json", "Accept" => "application/json"];
        $body = "{\"key\": \"mamas-and-papas\": \"$id\": [\"$name\"]: 1}";
        $response = $client->post($url, [
            'headers' => $headers,
            'body' => $body
        ]);
        $search_content = json_decode($response->getBody()->getContents(), true);

        # Getting the content of the email
        $url="http://apitest.mamasandpapas.ae/categories";
        $body = "{\"key\": \"LncvTV33JJiaeg007jW4TQ\",\"id\" : \"{$search_content[0]['_id']}\"}";
        $response = $client->post($url, [
            'headers' => $headers,
            'body' => $body
        ]);
        $content = json_decode($response->getBody()->getContents(), true);
        return $content;
    }

}
<?php

/**
 *
 */
$app->get('/{lang:[a-z]{2}}/sales/{id:[0-9]+}', function($id) use ($app) {

    try {

       # instantiate Guzzle
       $guzzle = new \GuzzleHttp\Client([
           'base_uri' => env('API_HOST'),
       ]);

       # query the api and get the response 
       $response = $guzzle->get("/v1/properties/sales/$id");
      
       # grab the response body and convert it to a JSON object
       $details = json_decode($response->getBody());
      
       # render the view and return the response 
       return view("properties/details", [
          'property' => $details,
          # add anything else you want to appear on the page here
       ]);
      
    } catch (GuzzleHttp\Exception\GuzzleException $e) {
       throw $e;
    } catch (Exception $e) {
       throw $e;
    }

});

/**
 * Returns a list of sales property previews
 */
$app->get('/{lang:[a-z]{2}}/sales', function() use ($app) {

    try {

       # instantiate Guzzle
       $guzzle = new \GuzzleHttp\Client([
           'base_uri' => env('API_HOST'),
       ]);

       # query the api and get the response 
       $response = $guzzle->get("/v1/properties/sales");
      
       # grab the response body and convert it to a JSON object
       $previews = json_decode($response->getBody());
      
       # render the view and return the response 
       return view("properties/previews", [
          'previews' => $previews,
          # add anything else you want to appear on the page here
       ]);
      
    } catch (GuzzleHttp\Exception\GuzzleException $e) {
       throw $e;
    } catch (Exception $e) {
       throw $e;
    }

});

/**
 * Returns a list of rental property previews
 */
$app->get('/rentals', function($slug) use ($app) {

});


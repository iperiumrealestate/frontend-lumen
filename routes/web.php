<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// documentation routes, remove this in live projects
include(base_path('routes/docs/routes.php'));
// example routes, remove this in live projects
include(base_path('routes/examples/routes.php'));


/**
 * Properties routes
 *
 */
include(base_path('routes/examples/properties.php'));

/**
 * Catch-All route
 *
 * This route will catch everything not previously specified, it
 * will query the api for a response, if the page is not found
 * a 404 response will be returned, you'll need to check for this
 * and set the appropriate response headers
 */
$app->get('/{slug:[a-zA-Z0-9\.\-\_\/]*}', function($slug=null) use ($app) {

   try {

      # instantiate Guzzle
      $guzzle = new \GuzzleHttp\Client([
      	'base_uri' => env('API_HOST'),
      ]);

      # query the api and get the response 
      $response = $guzzle->get("/v1/content/$slug");
      
      # grab the response body and convert it to a JSON object
      $page = json_decode($response->getBody());
      
      # render the view and return the response 
      return view("content/templates/page", [
         'page' => $page,
         # add anything else you want to appear on the page here
      ]);
      
   } catch (GuzzleHttp\Exception\GuzzleException $e) {
      throw $e;
   } catch (Exception $e) {
      throw $e;
   }
   
});
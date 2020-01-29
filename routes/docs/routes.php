<?php
/**
 * Documentation routes, feel free to remove these in your live project
 *
 */

$router->group(['prefix'=>'/docs'], function() use ($router) {

   $router->get('/', function () use ($router) {
      return view('docs/introduction');
   });

});

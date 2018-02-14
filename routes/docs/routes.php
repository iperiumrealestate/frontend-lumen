<?php
/**
 * Documentation routes, feel free to remove these in your live project
 *
 */

$app->group(['prefix'=>'/docs'], function() use ($app) {

   $app->get('/', function () use ($app) {
      return view('docs/introduction');
   });

});

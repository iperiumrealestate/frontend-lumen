<?php
/**
 * Example routes, feel free to use or remove these in your live projects
 *
 */
$app->group(['prefix'=>'/examples'], function() use ($app) {

   $app->get('/blog', function () use ($app) {
      // include(base_path('routes/examples/blog.php'));
   });

   $app->get('/content', function () use ($app) {
      include(base_path('routes/examples/content.php'));
   });

   $app->get('/properties', function () use ($app) {
      include(base_path('routes/examples/properties.php'));
   });

});
<?php
/**
 * Example routes, feel free to use or remove these in your live projects
 *
 */
$router->group(['prefix'=>'/examples'], function() use ($router) {

   $router->get('/blog', function () use ($router) {
      // include(base_path('routes/examples/blog.php'));
   });

   $router->get('/content', function () use ($router) {
      include(base_path('routes/examples/content.php'));
   });

   $router->get('/properties', function () use ($router) {
      include(base_path('routes/examples/properties.php'));
   });

});
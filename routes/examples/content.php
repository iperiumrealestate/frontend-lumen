<?php

/**
 * Returns a selection of blog post previews
 */
$router->get('/{lang:[a-z]{2}}/news', function($slug) use ($router) {

    die("Show news articles here");

});

/**
 * Returns the website navigation, this is the backbone of your site 
 * as you'll be requesting this frequently you'll probably want to 
 * cache it to improve performance 
 */
$router->get('/navs', function($slug) use ($router) {

});


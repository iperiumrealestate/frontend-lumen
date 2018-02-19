<?php

/**
 * Returns a selection of blog post previews
 */
$app->get('/{lang:[a-z]{2}}/news', function($slug) use ($app) {

    die("Show news articles here");

});

/**
 * Returns the website navigation, this is the backbone of your site 
 * as you'll be requesting this frequently you'll probably want to 
 * cache it to improve performance 
 */
$app->get('/navs', function($slug) use ($app) {

});


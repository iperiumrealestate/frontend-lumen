@extends('docs/layout')

@section('head')
    <title>Introduction | Lumen Frontend</title>
@stop

@section('body')
<div class="row">
    <div class="col col-xs-12">
       <h1>Lumen Frontend</h1>
       <h2>Introduction</h2>
       <p>This is an example project to demonstrate fetching data from the Iperium Real Estate API</p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col col-sm-6">
         <h3>Fetching &amp; displaying page content</h3>
         <p>Use Guzzle to fetch individual page content via our API <code><a target="_blank" href="http://api.iperiumrealestate.com/v1/content/welcome">http://api.iperiumrealestate.com/v1/content/welcome</a></code></p>
         <p>NB: When displaying the content editor, our system will expect to find the CSS styles in the following location <code>http://your-site.com/style/css/screen.css</code></p>
    </div>
    <div class="col col-sm-6">
          <pre>
# instantiate Guzzle
$guzzle = new Client([
   'base_uri' => env('API_HOST'),
]);

# query the api and get the response 
$response = $guzzle->get("/v1/content/welcome");

# convert the response body to a PHP json object
$page = json_decode($response->getBody());

# $page now contains a page object
         </pre>
   </div>
</div>
<hr>
<div class="row">
    <div class="col col-sm-6">
      <h3>Fetching website navigation</h3>
      <p>The Backoffice can supply website navigation which can be fetched by calling <code><a target="_blank" href="http://api.iperiumrealestate.com/v1/content/navs">http://api.iperiumrealestate.com/v1/content/navs</a></code></p>
    </div>
    <div class="col col-sm-6">
          <pre>
# instantiate Guzzle
$guzzle = new Client([
   'base_uri' => env('API_HOST'),
]);

# query the api and get the response 
$response = $guzzle->get("/v1/content/navs");

# convert the response body to a PHP json object
$navs = json_decode($response->getBody());

# $navs now contains an iterable navigation object with each navigation section as key
 
         </pre>
   </div>
</div>


<h3>Fetching &amp; displaying property listings</h3>
<p></p>
<code>
   
</code>
<p>You could also call the API to provide more interactivity, eg: embed a photo gallery in the preview listing when clicked by the visitor</p>
<p>This code will return just the property photos</p>
<code><a target="_blank" href="http://api.iperiumrealestate.com/v1/properties/20/photos">http://api.iperiumrealestate.com/v1/properties/20/photos</a></code>

<h3>Fetching a property detail page</h3>
<p></p>
<code>
   
</code>



@stop

<?php

header("Access-Control-Allow-Origin: *");

//hwn yw'r query YQL
$url = "https://query.yahooapis.com/v1/public/yql/daf/digwydd_heddiw";

// Initialize the cURL session with the request URL
$session = curl_init($url); 

// Tell cURL to return the request data
curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 



// Execute cURL on the session handle
$rawdata = curl_exec($session);

//gwned siwt bod pob dolen yn cysylltu yn ol i wikipedia
$response = str_replace("/wiki/", "http://cy.wikipedia.org/wiki/", $rawdata);

echo $response;

// Close the cURL session
curl_close($session);

?>

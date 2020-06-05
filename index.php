<?php

//Package inclusion example

require_once __DIR__.'/vendor/autoload.php';

//Initialisation
$test = new \HDESDK\SDKInit();

//User authorization
$test->Auth('example@example.com', 'your-api-key', 'https://example.helpdeskeddy.com');


// Request examples
$options = array(
    'ticket_id' => 3,
    'page'      => 1
);

$answer = $test->CommentsGet($options);




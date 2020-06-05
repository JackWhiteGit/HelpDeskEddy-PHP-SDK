<?php

//Package inclusion example

require_once __DIR__.'/vendor/autoload.php';

//Initialisation
$test = new \HDESDK\SDKInit();

//User authorization
$test->Auth('example@example.com', 'your-api-key', 'https://example.helpdeskeddy.com');


// Request examples
$options = array(
    'title' => 'Problem with email',
    'description'      => '<p>Problem with email info@example.com</p>',
    'sla_date'         => '07.06.2020 00:00',
    'priority_id'      => 1,
    'user_email'       => 'example@example.com',
    'create_from_user' => 1
);

//$test->TicketCreate($options); //ticket_create

$options = array(
    'page'      => 1
);
$ticket_list = $test->TicketsGet($options); // view tickets list, page = 1




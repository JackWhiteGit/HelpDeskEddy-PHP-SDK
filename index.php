<?php
ini_set('display_errors', 1);
require __DIR__.'/HDESDK/SDKInit.php';
require __DIR__.'/HDESDK/Requests/Requests.php';
$test = new SDKInit();
echo $test->Auth('leo40230@gmail.com', 'da736d56-c09d-4c7f-96c3-d961c29b7ee6', '"https://grimleo.helpdeskeddy.com');





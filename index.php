<?php
ini_set('display_errors', 1);
require 'HDESDK/Init/HDESDK.php';

$test = new HDESDK();
echo $test->Auth('leo40230@gmail.com', 'da736d56-c09d-4c7f-96c3-d961c29b7ee6', '"https://grimleo.helpdeskeddy.com');



//$user = 'leo40230@gmail.com';
//$api_token = 'da736d56-c09d-4c7f-96c3-d961c29b7ee6';
//
//$auth_token = base64_encode($user.':'.$api_token);
//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => "https://grimleo.helpdeskeddy.com/api/v2/tickets/",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "GET",
//    CURLOPT_HTTPHEADER => array(
//        "Authorization: Basic ".$auth_token,
//        "Content-Type: application/x-www-form-urlencoded",
//        "Cache-Control: no-cache"
//    ),
//));
//
//$response = curl_exec($curl);
//
//curl_close($curl);
//echo $response;




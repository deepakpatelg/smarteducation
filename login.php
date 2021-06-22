<?php 
// API key
$apiKey = 'patel@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// API URL
$url = 'http://localhost/smarteducation/index.php/api/Api1/login/';

// User account login info
$userData = array(
    'email' => 'patel@gmail.com',
    'password' => '123456'
);

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);

?>